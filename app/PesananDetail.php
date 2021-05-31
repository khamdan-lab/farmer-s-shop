<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    protected $table ="pesanandetails";

    protected $fillable = [

        'product_id',
        'pesanan_id',
        'jumlah',
        'jumlah_harga',
    ];

    public function product()
    {
        return $this->belongsTo(User::class);
    }

    public function pesanan(){

        return $this->belongsTo(Pesanan::class);
    }


}
