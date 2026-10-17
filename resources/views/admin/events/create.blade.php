@extends('admin.layouts.app')

@section('title','Admin - Create Event')

@section('content')

<style>
    .create-event-page {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .create-event-header {
        position: relative;
        overflow: hidden;
        padding: 30px;
        border-radius: 28px;
        background:
            linear-gradient(
                135deg,
                rgba(30, 142, 90, 0.14),
                rgba(16, 185, 129, 0.06)
            );
        border: 1px solid rgba(255,255,255,0.08);
    }

    .create-event-header::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            radial-gradient(
                circle at top right,
                rgba(255,255,255,0.08),
                transparent 35%
            );
        pointer-events: none;
    }

    .create-event-header h1 {
        position: relative;
        z-index: 1;
        margin: 0;
        color: #fff;
        font-size: 32px;
        font-weight: 900;
        letter-spacing: -0.03em;
    }

    .create-event-header p {
        position: relative;
        z-index: 1;
        margin: 10px 0 0;
        color: rgba(255,255,255,0.65);
        font-size: 14px;
        font-weight: 600;
    }

    .event-form {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 22px;
    }

    .form-card {
        position: relative;
        padding: 22px;
        border-radius: 24px;
        background:
            linear-gradient(
                180deg,
                rgba(255,255,255,0.03),
                rgba(255,255,255,0.015)
            );
        border: 1px solid rgba(255,255,255,0.08);
        transition: all .25s ease;
    }

    .form-card:hover {
        transform: translateY(-2px);
        border-color: rgba(255,255,255,0.12);
        box-shadow: 0 16px 40px rgba(0,0,0,0.16);
    }

    .form-card.full-width {
        grid-column: 1 / -1;
    }

    .form-label {
        display: block;
        margin-bottom: 12px;
        color: #fff;
        font-size: 14px;
        font-weight: 800;
        letter-spacing: -0.01em;
    }

    .form-input,
    .form-textarea,
    .form-select {
        width: 100%;
        border: 1px solid rgba(255,255,255,0.08);
        background: rgba(255,255,255,0.03);
        color: #fff;
        border-radius: 16px;
        padding: 14px 16px;
        font-size: 15px;
        font-weight: 600;
        outline: none;
        transition: all .2s ease;
        box-sizing: border-box;
    }

    .form-input::placeholder,
    .form-textarea::placeholder {
        color: rgba(255,255,255,0.35);
    }

    .form-input:focus,
    .form-textarea:focus,
    .form-select:focus {
        border-color: rgba(30, 142, 90, 0.7);
        background: rgba(255,255,255,0.05);
        box-shadow: 0 0 0 4px rgba(30, 142, 90, 0.12);
    }

    .form-textarea {
        resize: vertical;
        min-height: 140px;
    }

    .form-hint {
        margin-top: 10px;
        color: rgba(255,255,255,0.45);
        font-size: 12px;
        font-weight: 600;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 14px;
        flex-wrap: wrap;
    }

    .btn-modern {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 14px 20px;
        border-radius: 16px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        font-size: 14px;
        font-weight: 800;
        transition: all .25s ease;
    }

    .btn-save {
        color: #fff;
        background: linear-gradient(135deg, #1e8e5a, #16a34a);
        box-shadow:
            0 12px 30px rgba(30, 142, 90, 0.25),
            inset 0 1px 0 rgba(255,255,255,0.08);
    }

    .btn-save:hover {
        transform: translateY(-2px);
        box-shadow:
            0 16px 40px rgba(30, 142, 90, 0.35),
            inset 0 1px 0 rgba(255,255,255,0.08);
    }

    .btn-back {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.08);
        color: #fff;
    }

    .btn-back:hover {
        transform: translateY(-2px);
        background: rgba(255,255,255,0.07);
    }

    @media (max-width: 900px) {
        .form-grid {
            grid-template-columns: 1fr;
        }

        .form-card.full-width {
            grid-column: auto;
        }
    }

    @media (max-width: 640px) {

        .create-event-header {
            padding: 24px;
        }

        .create-event-header h1 {
            font-size: 26px;
        }

        .form-card {
            padding: 18px;
        }

        .form-actions {
            flex-direction: column;
        }

        .btn-modern {
            width: 100%;
        }
    }
</style>

<div class="create-event-page">

    <div class="create-event-header">
        <h1>Create New Event</h1>
        <p>
            Add event information, set dates, and publish when ready.
        </p>
    </div>

    <form action="/admin/events" method="POST" class="event-form">
        @csrf

        <div class="form-grid">

            <div class="form-card">
                <label class="form-label">Event Title</label>

                <input
                    type="text"
                    name="title"
                    required
                    value="{{ old('title') }}"
                    class="form-input"
                    placeholder="Enter event title"
                >

                <div class="form-hint">
                    Choose a clear and engaging title.
                </div>
            </div>

            <div class="form-card">
                <label class="form-label">Location</label>

                <input
                    type="text"
                    name="location"
                    value="{{ old('location') }}"
                    class="form-input"
                    placeholder="Nairobi, Kenya"
                >

                <div class="form-hint">
                    Physical venue or online location.
                </div>
            </div>

            <div class="form-card">
                <label class="form-label">Start Date</label>

                <input
                    type="date"
                    name="start_date"
                    value="{{ old('start_date') }}"
                    class="form-input"
                >
            </div>

            <div class="form-card">
                <label class="form-label">End Date</label>

                <input
                    type="date"
                    name="end_date"
                    value="{{ old('end_date') }}"
                    class="form-input"
                >
            </div>

            <div class="form-card full-width">
                <label class="form-label">Event Description</label>

                <textarea
                    name="description"
                    rows="6"
                    class="form-textarea"
                    placeholder="Write a detailed description about the event..."
                >{{ old('description') }}</textarea>

                <div class="form-hint">
                    Include agenda, speakers, activities, or important details.
                </div>
            </div>

            <div class="form-card">
                <label class="form-label">External Link URL</label>

                <input
                    type="url"
                    name="link_url"
                    value="{{ old('link_url') }}"
                    class="form-input"
                    placeholder="https://example.com"
                >

                <div class="form-hint">
                    Registration or information page.
                </div>
            </div>

            <div class="form-card">
                <label class="form-label">Link Button Text</label>

                <input
                    type="text"
                    name="link_text"
                    value="{{ old('link_text') }}"
                    class="form-input"
                    placeholder="Register Now"
                >

                <div class="form-hint">
                    Text users will click on.
                </div>
            </div>

            <div class="form-card full-width">
                <label class="form-label">Publishing Status</label>

                <select
                    name="status"
                    required
                    class="form-select"
                >
                    <option
                        value="draft"
                        @selected(old('status') === 'draft')
                    >
                        Draft
                    </option>

                    <option
                        value="published"
                        @selected(old('status') === 'published')
                    >
                        Published
                    </option>
                </select>

                <div class="form-hint">
                    Draft keeps the event hidden until ready.
                </div>
            </div>

        </div>

        <div class="form-actions">

            <a
                href="/admin/events"
                class="btn-modern btn-back"
            >
                ← Back
            </a>

            <button
                type="submit"
                class="btn-modern btn-save"
            >
                Save Event
            </button>

        </div>

    </form>

</div>

@endsection