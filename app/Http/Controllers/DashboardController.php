<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
        $page_slug = 'dashboard';
        return view('panel.dashboard', compact('page_slug'));
    }
}
