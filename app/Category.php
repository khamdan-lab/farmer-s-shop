<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\ProductModel;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'image',
        'name',
        'information',
    ];

    public function products(){

        return $this->hasMany(ProductModel::class);
    }

}
