@extends('admin.layouts.app')

@section('title','Admin - Edit Event')

@section('content')
    <h1 style="margin:0 0 14px;">Edit Event</h1>

    <form action="/admin/events/{{ $event->id }}" method="POST" style="display:grid;gap:12px;">
        @csrf
        @method('PUT')

        <div class="admin-card">
            <label><strong>Title</strong></label>
            <input name="title" required value="{{ old('title', $event->title) }}" style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;"/>
        </div>

        <div class="admin-card">
            <label><strong>Location</strong></label>
            <input name="location" value="{{ old('location', $event->location) }}" style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;"/>
        </div>

        <div class="admin-card">
            <label><strong>Start date</strong></label>
            <input type="date" name="start_date" value="{{ old('start_date', $event->start_date ? $event->start_date->format('Y-m-d') : '') }}" style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;"/>
        </div>

        <div class="admin-card">
            <label><strong>End date</strong></label>
            <input type="date" name="end_date" value="{{ old('end_date', $event->end_date ? $event->end_date->format('Y-m-d') : '') }}" style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;"/>
        </div>

        <div class="admin-card">
            <label><strong>Description</strong></label>
            <textarea name="description" rows="4" style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;">{{ old('description', $event->description) }}</textarea>
        </div>

        <div class="admin-card">
            <label><strong>Link URL</strong></label>
            <input name="link_url" value="{{ old('link_url', $event->link_url) }}" placeholder="https://..." style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;"/>
        </div>

        <div class="admin-card">
            <label><strong>Link Text</strong></label>
            <input name="link_text" value="{{ old('link_text', $event->link_text) }}" style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;"/>
        </div>

        <div class="admin-card">
            <label><strong>Status</strong></label>
            <select name="status" required style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;">
                <option value="draft" @selected(old('status', $event->status)==='draft')>Draft</option>
                <option value="published" @selected(old('status', $event->status)==='published')>Published</option>
            </select>
        </div>

        <div class="admin-actions">
            <button class="btn btn-primary" type="submit">Update</button>
            <a class="btn btn-secondary" href="/admin/events">Back</a>
        </div>
    </form>
@endsection

