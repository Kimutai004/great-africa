<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessagesController extends AdminBaseController
{
    public function index()
    {
        $messages = ContactMessage::orderByDesc('created_at')->paginate(12);
        return view('admin.contact-messages.index', compact('messages'));
    }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();
        return redirect()->route('admin.contact-messages.index')->with('success', 'Message deleted.');
    }

    public function bulk(Request $request)
    {
        $data = $request->validate([
            'selected' => ['nullable', 'array'],
            'selected.*' => ['integer'],
        ]);

        if (! empty($data['selected'])) {
            ContactMessage::whereIn('id', $data['selected'])->delete();
        }

        return redirect()->route('admin.contact-messages.index')->with('success', 'Bulk action applied.');
    }
}

