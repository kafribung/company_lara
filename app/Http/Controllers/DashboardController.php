<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import DB Yang Login
use Auth;
class DashboardController extends Controller
{

    public function index()
    {
        $data= Auth::user();
        return view('dashboard.index', compact('data'));
    }
}
