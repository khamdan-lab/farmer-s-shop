<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;





class CategoryController extends Controller
{

    public function index()
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

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'information' => 'required',

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Category::create($input);

        return redirect()->route('categories.index')->with('success','Category berhasil ditambahkan');
    }


    public function show($id)
    {

    }

    public function edit(Category $category)
    {
        return view('layout.admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
       $request->validate([
            'name' => 'required',
            'informtion' => 'required',
       ]);

       $input = $request->all();

       if ($image = $request->file('image')) {
           $destinationPath = 'image/';
           $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
           $image->move($destinationPath, $profileImage);
           $input['image'] = "$profileImage";
       }else{
           unset($input['image']);
       }

       $category->update($input);

       return redirect()->route('categories.index')->with('success', 'Category berhail diupdate');
    }

    public function destroy( Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category berhasil dihapus');
    }

    public function navbar(){
        $category = Category::all();

        return view('layout.customer.v_navbar', compact('category'));
    }

}
