<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrossselProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crosssel_products', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('product_id')->nullable();
//            $table->foreign('product_id')->references('products')->on('id')->onDelete('set null');
////            $table->foreign('crosssel_id')->references('products')->on('id')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crosssel_products');
    }
}
