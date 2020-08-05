<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddEventController extends Controller
{
    public function index()
    {
        return view('pages.add-event-offline');
    }
}
