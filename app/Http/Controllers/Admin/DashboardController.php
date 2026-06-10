<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\ContactMessage;
use App\Models\Event;
use App\Models\Post;
use App\Models\VolunteerRequest;

class DashboardController extends AdminBaseController
{
    public function index()
    {
        $eventsCount = Event::count();
        $postsCount = Post::count();
        $messagesCount = ContactMessage::count();
        $requestsCount = VolunteerRequest::count();

        return view('admin.dashboard', compact('eventsCount', 'postsCount', 'messagesCount', 'requestsCount'));
    }
}



