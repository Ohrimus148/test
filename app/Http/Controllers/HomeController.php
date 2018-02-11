<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Projects;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $managers = User::all();
        return view('manager', compact("managers"));
    }

    public function projects() {
        $projects = Projects::all();
        return view('projects', compact("projects"));
    }
}
