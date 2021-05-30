<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance./register
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->level == 2) {

            $category = Category::all();

            return view('layout.customer.iklan',compact('category'));
        }

        elseif (auth()->user()->level == 1){

            return view('layout.admin.template');
        }
    }
}
