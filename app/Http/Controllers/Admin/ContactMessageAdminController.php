<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;

class ContactMessageAdminController extends Controller
{
    public function index()
    {
        return view('admin.contact_messages.index', [
            'messages' => ContactMessage::orderByDesc('id')->get()
        ]);
    }
}
