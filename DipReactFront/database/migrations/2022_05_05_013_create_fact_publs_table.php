<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactPublsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact_publs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('year_start');
            $table->string('year_end');
            //$table->string('id_autor');
            $table->foreignId('id_autor')
                    ->references('id')
                    ->on('autors')
                    ->onDelete('cascade');
            //$table->string('plan_id');
            $table->foreignId('plan_id')
                    ->references('id')
                    ->on('plans')
                    ->onDelete('cascade');
            $table->string('theses')->default('0');
            $table->string('professional_articles');
            $table->string('scopus');
            $table->string('manuals');
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
        Schema::dropIfExists('fact_publs');
    }
}
