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
            $table->id();
            $table->string('image');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('sub_content_uz');
            $table->string('sub_content_ru');
            $table->string('sub_content_en');
            $table->text('content_uz');
            $table->text('content_ru');
            $table->text('content_en');
            $table->integer('price');
            $table->unsignedBigInteger('catalog_id');
            $table->foreign('catalog_id')->references('id')->on('products_catalog');
            $table->integer('status');
            $table->integer('order');
            $table->integer('onGallery');
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
