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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enclosure_id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('species');
            $table->enum('gender',['Male', 'Female']);
            $table->string('country');
            $table->timestamps();
            $table->foreign('enclosure_id')->references('id')->on('enclosures')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
};
