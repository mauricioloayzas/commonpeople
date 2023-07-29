<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('exercise/home');
    }

    public function list()
    {
        return view('exercise/list');
    }

    public function form()
    {
        return view('exercise/form');
    }

    public function slider()
    {
        return view('exercise/slider');
    }
}
