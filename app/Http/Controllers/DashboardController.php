<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $page_slug = 'dashboard';
        $user = Auth::user();
        // Check if the phone number is present
        if (empty($user->phone) && $user->hasrole('customer')) {
            // Phone number is not present, redirect to profile page
            return redirect()->route('profile');
        }else{
            return view('panel.dashboard', compact('page_slug'));
        }
    }
}
