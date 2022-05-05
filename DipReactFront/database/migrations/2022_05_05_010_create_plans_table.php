<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('year_start');
            $table->string('year_end');
            //$table->string('id_autor');
            $table->foreignId('id_autor')
                    ->references('id')
                    ->on('autors')
                    ->onDelete('cascade');
            $table->string('theses');
            $table->string('professional_articles');
            $table->string('scopus');
            $table->string('manuals');
            $table->boolean('status');
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
        Schema::dropIfExists('plans');
    }
}
