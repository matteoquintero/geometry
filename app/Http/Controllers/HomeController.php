<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\VisitorController as Visitor;

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
    public function index()
    {

        $visitors = Visitor::get();
        return view('visitors', ['visitors' => $visitors]);
    }
}
