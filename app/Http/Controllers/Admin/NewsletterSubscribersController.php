<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewsletterSubscribersController extends AdminBaseController
{
    public function index()
    {
        $subscribers = NewsletterSubscriber::orderByDesc('subscribed_at')->paginate(20);
        return view('admin.newsletter.index', compact('subscribers'));
    }

    public function destroy(NewsletterSubscriber $newsletterSubscriber)
    {
        $newsletterSubscriber->delete();
        return redirect()->route('admin.newsletter.index')->with('success', 'Subscriber removed.');
    }

    public function bulk(Request $request)
    {
        $data = $request->validate([
            'selected' => ['nullable', 'array'],
            'selected.*' => ['integer'],
        ]);

        if (! empty($data['selected'])) {
            NewsletterSubscriber::whereIn('id', $data['selected'])->delete();
        }

        return redirect()->route('admin.newsletter.index')->with('success', 'Bulk action applied.');
    }
}
