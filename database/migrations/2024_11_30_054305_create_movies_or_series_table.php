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
        Schema::create('movies_or_series', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('classification'); // Drama, Action, etc.
            $table->date('release_date');
            $table->text('review');
            $table->integer('season')->nullable(); // Null if it's a movie
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
        Schema::dropIfExists('movies_or_series');
    }
};
