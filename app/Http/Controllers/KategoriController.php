<?php

namespace App\Http\Controllers;
use App\Category;
use App\ProductModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function productByKategori($id)
    {
    //    $data = array (
    //        'products' => ProductModel::where('cetegory_id', $id)->paginante(3),
    //        'categories' => Category::findOrFail($id)

    //    );

        // $category = Category::all();
        $data = Category::find($id);
        $category = $data->products;
        // $data = $category->products;
        // echo $id;
        return view('layout.customer.kategori', compact('category'));



    }

    public function productByDetail($id)
    {
        $data= ProductModel::find($id);


        // $data = $category->products;
        // echo $id;
        return view('layout.customer.produk_detail', compact('data'));

    }
}
