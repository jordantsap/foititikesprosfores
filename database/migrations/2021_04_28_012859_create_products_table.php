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
            $table->boolean('active')->default(0)->nullable();
            $table->boolean('featured')->default(0)->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('link');
            $table->boolean('slider')->default(0)->nullable();
            $table->foreignId('color_id');
            $table->double('price', 8, 2);
            $table->foreignId('category_id');
            $table->foreignId('user_id')->nullable();
            // $table->foreignId('type_id');
            $table->foreignId('company_id');
            $table->foreignId('brand_id')->nullable();
            $table->text('description');
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
