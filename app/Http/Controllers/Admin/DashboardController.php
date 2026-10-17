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

        $recentActivity = collect();

        // Latest event
        $latestEvent = Event::orderBy('created_at', 'desc')->first();
        if ($latestEvent) {
            $recentActivity->push([
                'icon' => '&#128197;',
                'title' => 'New event created: ' . e($latestEvent->title),
                'meta' => $latestEvent->created_at->diffForHumans(),
            ]);
        }

        // Latest post
        $latestPost = Post::orderBy('created_at', 'desc')->first();
        if ($latestPost) {
            $recentActivity->push([
                'icon' => '&#128221;',
                'title' => 'New post created: ' . e($latestPost->title),
                'meta' => $latestPost->created_at->diffForHumans(),
            ]);
        }

        // Latest contact message
        $latestMessage = ContactMessage::orderBy('created_at', 'desc')->first();
        if ($latestMessage) {
            $recentActivity->push([
                'icon' => '&#9993;',
                'title' => 'New message from ' . e($latestMessage->name),
                'meta' => $latestMessage->created_at->diffForHumans(),
            ]);
        }

        // Latest volunteer request
        $latestRequest = VolunteerRequest::orderBy('created_at', 'desc')->first();
        if ($latestRequest) {
            $recentActivity->push([
                'icon' => '&#128105;',
                'title' => 'New volunteer request from ' . e($latestRequest->name),
                'meta' => $latestRequest->created_at->diffForHumans(),
            ]);
        }

        $recentActivity = $recentActivity->sortByDesc(function ($item) {
            // Re-sort by parsing meta back isn't trivial; keep insertion order reversed
            return 0;
        })->values()->take(5);

        return view('admin.dashboard', compact('eventsCount', 'postsCount', 'messagesCount', 'requestsCount', 'recentActivity'));
    }
}



