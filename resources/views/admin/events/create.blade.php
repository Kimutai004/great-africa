@extends('admin.layouts.app')

@section('title','Admin - Create Event')

@section('content')
    <div class="admin-topbar">
        <div class="admin-topbar-left">
            <h1>Create Event</h1>
            <div class="crumb">Add a new event and publish when ready</div>
        </div>
    </div>

    <form action="/admin/events" method="POST" class="form-section">
        @csrf

        <div class="form-field">
            <label class="form-label" for="title">Event Title</label>
            <input id="title" name="title" type="text" required value="{{ old('title') }}" class="form-input" placeholder="e.g. Community Field Day" />
        </div>

        <div class="form-field">
            <label class="form-label" for="location">Location</label>
            <input id="location" name="location" type="text" value="{{ old('location') }}" class="form-input" placeholder="e.g. Nairobi, Kenya" />
        </div>

        <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:16px;">
            <div class="form-field">
                <label class="form-label" for="start_date">Start Date</label>
                <input id="start_date" name="start_date" type="date" required value="{{ old('start_date') }}" class="form-input" />
            </div>
            <div class="form-field">
                <label class="form-label" for="end_date">End Date</label>
                <input id="end_date" name="end_date" type="date" value="{{ old('end_date') }}" class="form-input" />
            </div>
        </div>

        <div class="form-field">
            <label class="form-label" for="description">Event Description</label>
            <textarea id="description" name="description" rows="6" class="form-textarea" placeholder="Write a detailed description about the eventâ€¦">{{ old('description') }}</textarea>
            <div class="form-hint">Include agenda, speakers, activities, or important details.</div>
        </div>

        <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:16px;">
            <div class="form-field">
                <label class="form-label" for="link_url">External Link URL</label>
                <input id="link_url" name="link_url" type="url" value="{{ old('link_url') }}" class="form-input" placeholder="https://example.com" />
                <div class="form-hint">Registration or information page.</div>
            </div>
            <div class="form-field">
                <label class="form-label" for="link_text">Link Button Text</label>
                <input id="link_text" name="link_text" type="text" value="{{ old('link_text') }}" class="form-input" placeholder="Register Now" />
                <div class="form-hint">Text users will click on.</div>
            </div>
        </div>

        <div class="form-field">
            <label class="form-label" for="status">Publishing Status</label>
            <select id="status" name="status" required class="form-select">
                <option value="draft" @selected(old('status') === 'draft')>Draft</option>
                <option value="published" @selected(old('status') === 'published')>Published</option>
            </select>
            <div class="form-hint">Draft keeps the event hidden until ready.</div>
        </div>

        <div class="form-actions">
            <a href="/admin/events" class="btn-back">â† Back</a>
            <button type="submit" class="btn-save">Save Event</button>
        </div>
    </form>
@endsection
