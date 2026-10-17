@extends('admin.layouts.app')

@section('title','Admin - Edit Event')

@section('content')
    <div class="admin-topbar">
        <div class="admin-topbar-left">
            <h1>Edit Event</h1>
            <div class="crumb">Edit event #{{ $event->id }}</div>
        </div>
    </div>

    <form action="/admin/events/{{ $event->id }}" method="POST" class="form-section">
        @csrf
        @method('PUT')

        <div class="form-field">
            <label class="form-label" for="title">Event Title</label>
            <input id="title" name="title" required value="{{ old('title', $event->title) }}" class="form-input" />
        </div>

        <div class="form-field">
            <label class="form-label" for="location">Location</label>
            <input id="location" name="location" value="{{ old('location', $event->location) }}" class="form-input" />
        </div>

        <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:16px;">
            <div class="form-field">
                <label class="form-label" for="start_date">Start Date</label>
                <input type="date" id="start_date" name="start_date" value="{{ old('start_date', $event->start_date ? $event->start_date->format('Y-m-d') : '') }}" class="form-input" />
            </div>
            <div class="form-field">
                <label class="form-label" for="end_date">End Date</label>
                <input type="date" id="end_date" name="end_date" value="{{ old('end_date', $event->end_date ? $event->end_date->format('Y-m-d') : '') }}" class="form-input" />
            </div>
        </div>

        <div class="form-field">
            <label class="form-label" for="description">Description</label>
            <textarea name="description" rows="4" class="form-textarea">{{ old('description', $event->description) }}</textarea>
        </div>

        <div class="form-field">
            <label class="form-label" for="link_url">Link URL</label>
            <input id="link_url" name="link_url" value="{{ old('link_url', $event->link_url) }}" placeholder="https://..." class="form-input" />
        </div>

        <div class="form-field">
            <label class="form-label" for="link_text">Link Text</label>
            <input id="link_text" name="link_text" value="{{ old('link_text', $event->link_text) }}" class="form-input" />
        </div>

        <div class="form-field">
            <label class="form-label" for="status">Status</label>
            <select id="status" name="status" required class="form-select">
                <option value="draft" @selected(old('status', $event->status)==='draft')>Draft</option>
                <option value="published" @selected(old('status', $event->status)==='published')>Published</option>
            </select>
        </div>

        <div class="form-actions">
            <button class="btn-save" type="submit">Update Event</button>
            <a class="btn-back" href="/admin/events">Back</a>
        </div>
    </form>
@endsection
