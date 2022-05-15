<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    /**
     * Show the application dashboard page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = Auth::user()->jobs;
        return view('dashboard.index', ['jobs' => $jobs]);
    }
}
