<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_Id');
            $table->integer('product_subcategory_id')->unsigned();
            $table->foreign('product_subcategory_id')->references('subcategory_id')->on('subcategory');
            $table->text('product_name');
            $table->string('product_code');
            $table->text('product_image');
            $table->string('product_contact');
            $table->text('product_brand');
            $table->integer('product_guarantee');
            $table->text('product_material');
            $table->text('product_color');
            $table->text('product_description');
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
        Schema::drop('product');
    }
}
