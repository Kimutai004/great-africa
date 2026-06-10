<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\VolunteerRequest;

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
}

