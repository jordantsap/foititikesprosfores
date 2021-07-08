<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_types', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
<<<<<<< HEAD
            $table->string('image')->nullable();
            $table->foreignId('type_id');
            $table->timestamps();
=======
            $table->string('image');
            $table->foreignId('type_id');
            // $table->timestamps();
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_types');
    }
}
