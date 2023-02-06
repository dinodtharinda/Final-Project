<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('category');
            $table->double('unit_price');
            $table->longText('description');
            $table->integer('quantity');
            $table->date('date');
            $table->boolean('is_remove')->default(false);
            $table->integer('model_id')->unsigned();
            $table->integer('fabric_id')->unsigned();
            $table->integer('size_id')->unsigned();
            $table->integer('timber_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('product_model')->onDelete('cascade');
            $table->foreign('fabric_id')->references('id')->on('product_fabric')->onDelete('cascade');
            $table->foreign('size_id')->references('id')->on('product_size')->onDelete('cascade');
            $table->foreign('timber_id')->references('id')->on('product_timber')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('product_type')->onDelete('cascade');
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
};
