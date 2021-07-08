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
<<<<<<< HEAD
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
=======
            $table->string('title');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('sku');
            $table->string('link');
            $table->boolean('slider')->default(0)->nullable();
            $table->string('color');
            $table->double('price', 8, 2);
            $table->foreignId('category_id');
            $table->foreignId('type_id');
            $table->foreignId('company_id');
            $table->foreignId('field_id');
            $table->foreignId('value_id');
            $table->foreignId('brand_id')->nullable();
            $table->boolean('active')->default(0)->nullable();
            $table->boolean('featured')->default(0)->nullable();
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
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
