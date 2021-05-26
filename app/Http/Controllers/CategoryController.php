<?php

namespace App\Http\Controllers;

use App\Category;
use App\ProductModel;
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
        $request->validate([

            'name' => 'required',

        ]);


        Category::create($request->all());

        return redirect()->route('categories.index')
                        ->with('success','Category berhasil ditambahkan');
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

}
