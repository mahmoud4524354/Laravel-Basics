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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('number', 10);
            //   انت كده ربط مع جدول الuser
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
//            $table->foreignId('user_id')->constrained("users")->cascadeOnDelete();
//            $table->foreignId('user_id')->references("id")->on("users")->cascadeOnDelete();
//            $table->foreign('user_id')->references("id")->on("users")->cascadeOnDelete();


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
        Schema::dropIfExists('phones');
    }
};
