<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventsPageController extends Controller
{
    public function index()
    {
        $events = Event::published()->get();
        return view('pages.events', compact('events'));
    }
}

