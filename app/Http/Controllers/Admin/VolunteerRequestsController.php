<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\VolunteerRequest;
use Illuminate\Http\Request;

class VolunteerRequestsController extends AdminBaseController
{
    public function index()
    {
        $requests = VolunteerRequest::orderByDesc('created_at')->paginate(12);
        return view('admin.volunteer-requests.index', compact('requests'));
    }

    public function destroy(VolunteerRequest $volunteerRequest)
    {
        $volunteerRequest->delete();
        return redirect()->route('admin.volunteer-requests.index')->with('success', 'Request deleted.');
    }

    public function bulk(Request $request)
    {
        $data = $request->validate([
            'selected' => ['nullable', 'array'],
            'selected.*' => ['integer'],
        ]);

        if (! empty($data['selected'])) {
            VolunteerRequest::whereIn('id', $data['selected'])->delete();
        }

        return redirect()->route('admin.volunteer-requests.index')->with('success', 'Bulk action applied.');
    }
}

