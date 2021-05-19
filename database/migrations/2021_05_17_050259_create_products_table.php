<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->Increments('id');
            $table->date('tanggal_masuk');
            $table->string('name_goods');
            $table->integer('cost')->unsigned();
            $table->integer('stock');
            $table->string('image');
            $table->string('information');
            $table->string('category_id');
            $table->timestamps();

        });
    }
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
