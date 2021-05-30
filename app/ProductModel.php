<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;



class ProductModel extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'tanggal_masuk',
        'name_goods',
        'cost',
        'stock',
        'image',
        'information',
        'category_id'
    ];

    public function category(){

        return $this->belongsTo(Category::class);
    }





}
