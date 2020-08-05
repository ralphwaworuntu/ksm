<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardEventController extends Controller
{
    public function index()
    {
        return view('pages.dashboard-event');
    }
}
