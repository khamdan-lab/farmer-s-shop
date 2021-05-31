<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $tabel = "pesanans";

    protected $fillable = [

        'user_id',
        'tanggal',
        'status',
        'jumlah_harga',

    ];
   public function user(){

       return $this->belongsTo(User::class);
   }

   public function pesanan_details(){

       return $this->hasMany(PesananDetail::class);
   }
}
