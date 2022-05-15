<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = Job::orderBy('created_at')->get();
        return view('home', ['jobs' => $jobs]);
    }
}
