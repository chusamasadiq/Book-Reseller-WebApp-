<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Book_Name');
            $table->string('Author_Name');
            $table->string('Book_Category');
            $table->integer('Book_Price');
            $table->integer('Book_Quantity');
            $table->string('Seller_Location');
            $table->string('Seller_ContactNumber');
            $table->string('Book_Img');
            $table->string('vendor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
