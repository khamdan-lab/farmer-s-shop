<?php

namespace App\Http\Controllers;

use App\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function invoice(){

        $pesanan = Pesanan::with('user')->get();

        return view('layout.admin.history.index', compact('pesanan'));
    }


    public function bukti(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 1)->first();
        $pesanan->status = 2;
        $pesanan->image = $input['image'];
        $pesanan->update();

        return redirect('/history');

        // dd($pesanan);

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('image'), $imageName);

    }


    public function approve(Request $request, Pesanan $data){

            $request->validate([

            'approve'=>'required',
        ]);

        $input = $request->all();

        dd($input);
        // dd($input);
        // $status = $request->status;
        // $profile = $status;

        // $input['approve'] = $profile;

        // $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('approve', 0)->first();
        // $pesanan->approve = $input['approve'];
        // $pesanan->update();

        $data->update($input);

        return redirect('/historyadmin');

        // echo Pesanan::where('user_id', Auth::user()->id)
        // ->update(['status'=>$request->status]);

        // $psn = Pesanan::find($request->id);
        // $psn->status = $request->status;
        // $psn->save();



    }

}
