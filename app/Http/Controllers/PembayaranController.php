<?php

namespace App\Http\Controllers;
use App\Pesanan;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(){

       return view('layout.customer.pembayaran');
    }


    public function pembayaran(Request $request, User $user)
    {
        $request->validate([
            'no_hp' => 'required',
            'address' => 'required',
        ]);

        //Simpan nohp Alamat ke data user
        $user = User::where('id', Auth::user()->id)->first();
        $user->no_hp = $request->no_hp;
        $user->address = $request->address;
        $user->update();

        //update data pesanan
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->status = 1;
        $pesanan->update();

        return redirect('/history');
    }
}
