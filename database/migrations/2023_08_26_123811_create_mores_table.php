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
        Schema::create('mores', function (Blueprint $table) {
            $table->id();
            $table->string("title",100);
            $table->text("content");
            $table->string("photo",200);
            $table->unsignedBiginteger('category_id');
            $table->foreign('category_id')->references('id')->on("categories");
            $table->unsignedBiginteger('type_id');
            $table->foreign('type_id')->references('id')->on("types");
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
        Schema::dropIfExists('mores');
    }
};
