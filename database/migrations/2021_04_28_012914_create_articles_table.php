<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('image')->nullable();
            $table->boolean('active')->default(0)->nullable();
            $table->boolean('featured')->default(0)->nullable();
<<<<<<< HEAD
            $table->foreignId('articletype_id');
=======
            $table->foreignId('article_type_id');
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            // $table->string('meta_description');
            // $table->string('meta_keywords');
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
        Schema::dropIfExists('articles');
    }
}
