<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\ContactMessage;

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
}

