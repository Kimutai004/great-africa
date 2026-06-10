<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\VolunteerRequest;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'location' => ['required', 'string', 'max:255'],
            'interest' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        VolunteerRequest::create($data);

        return redirect('/get-involved')->with('success', 'Request received. Thank you for supporting Great Africa.');
    }
}

