<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\ProductModel;


class ProductController extends Controller
{

    public function index()
    {
        $products = ProductModel::with('category')->get();

        return view('layout.admin.index',compact('products'));
    }

    public function create()
    {
        return view('layout.admin.create');

    }
    public function store(Request $request)
    {
        // $request->validated();
        $request->validate([

            'tanggal_masuk' => 'required',
            'name_goods' => 'required',
            'cost' => 'required',
            'stock' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'information' => 'required',
            'category_id' => 'required',

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        ProductModel::create($input);
        return redirect()->route('products.index')->with('success','Product berhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function edit(ProductModel $product)
    {

        return view('layout.admin.edit',compact('product'));
    }


    public function update(Request $request, ProductModel $product)
    {
        $request->validate([
            'tanggal_masuk' => 'required',
            'name_goods' => 'required',
            'cost' => 'required',
            'stock' => 'required',
            'information' => 'required',
            'category_id' => 'required',
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

        $product->update($input);

        return redirect()->route('products.index')->with('success','Product berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductModel $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success','Product berhasil dihapus');
    }

}
