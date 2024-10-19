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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title",4) ;


             $table->unsignedInteger("user_id"); //Error
//             $table->unsignedBigInteger("user_id");
            // $table->foreign("user_id")->references("id")->on("users");

            // $table->foreignId("user_id")->constrained();
            // $table->foreignId("user_id")->constrained("users"); // للتاكيد
            $table->foreignId("user_id")->constrained("users")->cascadOnDelete;


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
        Schema::dropIfExists('posts');
    }
};
