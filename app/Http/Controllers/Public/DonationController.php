<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'amount' => ['required', 'numeric', 'min:1'],
            'purpose' => ['required', 'string', 'max:255'],
        ]);

        $data['currency'] = 'KES';
        $data['status'] = 'pledged';

        Donation::create($data);

        return redirect('/donate')->with('success', 'Thank you for your pledge. We will be in touch with payment details.');
    }
}
