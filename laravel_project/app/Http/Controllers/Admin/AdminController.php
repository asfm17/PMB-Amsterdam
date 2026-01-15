<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Vacancy;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'contactCount' => ContactMessage::count(),
            'vacancyCount' => Vacancy::count(),
        ]);
    }
}
