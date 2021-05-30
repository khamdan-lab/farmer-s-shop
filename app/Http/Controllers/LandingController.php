<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
         $category = Category::all();

        return view('layout.customer.iklan', compact('category'));

    }
}
