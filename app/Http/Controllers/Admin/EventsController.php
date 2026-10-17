<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends AdminBaseController
{
    public function index()
    {
        $events = Event::orderByDesc('start_date')->orderByDesc('id')->paginate(12);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date', 'after_or_equal:start_date'],
            'description' => ['nullable', 'string'],
            'link_url' => ['nullable', 'string', 'max:255'],
            'link_text' => ['nullable', 'string', 'max:100'],
            'status' => ['required', 'in:draft,published'],
        ]);

        if (($data['link_url'] ?? null) === 'null' || ($data['link_url'] ?? null) === '') {
            $data['link_url'] = null;
        }

        if (! empty($data['link_url']) && ! filter_var($data['link_url'], FILTER_VALIDATE_URL)) {
            $data['link_url'] = null;
        }

        $data['published_at'] = $data['status'] === 'published' ? now() : null;

        Event::create($data);
        return redirect()->route('admin.events.index')->with('success', 'Event created.');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date', 'after_or_equal:start_date'],
            'description' => ['nullable', 'string'],
            'link_url' => ['nullable', 'string', 'max:255'],
            'link_text' => ['nullable', 'string', 'max:100'],
            'status' => ['required', 'in:draft,published'],
        ]);

        if (($data['link_url'] ?? null) === 'null' || ($data['link_url'] ?? null) === '') {
            $data['link_url'] = null;
        }

        if (! empty($data['link_url']) && ! filter_var($data['link_url'], FILTER_VALIDATE_URL)) {
            $data['link_url'] = null;
        }

        $data['published_at'] = $data['status'] === 'published' ? now() : null;

        $event->update($data);
        return redirect()->route('admin.events.index')->with('success', 'Event updated.');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event deleted.');
    }

    public function bulk(Request $request)
    {
        $data = $request->validate([
            'bulk_action' => ['nullable', 'in:publish,draft,delete'],
            'selected' => ['nullable', 'array'],
            'selected.*' => ['integer'],
        ]);

        $ids = $data['selected'] ?? [];
        $action = $request->input('bulk_action');

        if (! empty($ids) && $action) {
            if ($action === 'delete') {
                Event::whereIn('id', $ids)->delete();
            } elseif (in_array($action, ['publish', 'draft'], true)) {
                Event::whereIn('id', $ids)->update([
                    'status' => $action === 'publish' ? 'published' : 'draft',
                ]);
            }
        }

        return redirect()->route('admin.events.index')->with('success', 'Bulk action applied.');
    }
}


