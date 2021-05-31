<?php

namespace App\Http\Controllers;

use App\ProductModel;
use App\Pesanan;
use App\PesananDetail;
use App\User;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function pesan(Request $request, $id){

        $product = ProductModel::where('id', $id)->first();
        $tanggal = Carbon::now();

        if ($request->jumlah_pesan > $product->stock) {


            return redirect('DetailProduk/'.$id);
        }

        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        if (empty($cek_pesanan)) {

            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumlah_harga =0;
            $pesanan->save();
        }

        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        $cek_pesanan_detail = PesananDetail::where('product_id', $product->id)->where('pesanan_id', $pesanan_baru->id)->first();

        if (empty($cek_pesanan_detail))
        {

            $pesanan_detail = new PesananDetail;
            $pesanan_detail->product_id = $product->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $product->cost*$request->jumlah_pesan;
            $pesanan_detail->save();

        }else{
            $pesanan_detail = PesananDetail::where('product_id', $product->id)->where('pesanan_id', $pesanan_baru->id)->first();

            $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

            //harga sekarang
            $harga_terbaru = $product->cost*$request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_terbaru;
            $pesanan_detail->update();
        }

        //total
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga+$product->cost*$request->jumlah_pesan;
        $pesanan->update();


        return redirect('home');


    }
}

