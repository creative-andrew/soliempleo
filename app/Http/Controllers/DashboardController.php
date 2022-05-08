<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /**
     * Show the application dashboard page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $jobs = $request->user()->jobs()->get();
        return view('dashboard.index', ['jobs' => $jobs]);
    }
}
