<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::all();

        return view('layout.customer.iklan', compact('category'));

    }
    public function index_admin()
    {
        $category = Category::all();

        return view('layout.admin.category.index', compact('category'));

    }

    public function create()
    {
        return view('layout.admin.category.create');
    }

    public function store(Request $request)
    {

    }


    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function product_category(Category $category)
    {
        return $category;
    }
}
