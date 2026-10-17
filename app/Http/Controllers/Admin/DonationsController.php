<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationsController extends AdminBaseController
{
    public function index(Request $request)
    {
        $query = Donation::query();

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('purpose', 'like', "%{$search}%");
            });
        }

        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        $donations = $query->orderByDesc('created_at')->paginate(20)->withQueryString();

        $totalRaised = (float) Donation::where('status', 'confirmed')->sum('amount');
        $totalPledged = (float) Donation::where('status', 'pledged')->sum('amount');
        $donorCount = Donation::distinct('email')->count('email');

        return view('admin.donations.index', compact('donations', 'totalRaised', 'totalPledged', 'donorCount'));
    }

    public function updateStatus(Request $request, Donation $donation)
    {
        $data = $request->validate([
            'status' => ['required', 'in:pledged,confirmed,cancelled'],
        ]);

        $donation->update($data);

        return redirect()->route('admin.donations.index')->with('success', 'Donation status updated.');
    }

    public function destroy(Donation $donation)
    {
        $donation->delete();
        return redirect()->route('admin.donations.index')->with('success', 'Donation record removed.');
    }
}
