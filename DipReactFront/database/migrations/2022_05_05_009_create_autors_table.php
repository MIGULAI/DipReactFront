<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autors', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('Last_Name');
                $table->string('First_Name');
                $table->string('Patronic');
                $table->string('Ukr_PIP');
                $table->string('Eng_PIP')->default('none');
                $table->string('Rus_PIP')->default('none');
            //$table->string('Department')->default('1');
                $table->foreignId('Department')
                        ->default('1')
                        ->references('id')
                        ->on('departments');
               //$table->string('Organization')->default('1');
               $table->foreignId('Organization')
                    ->default('1')
                    ->references('id')
                    
                    ->on('organizations');
               // $table->string('Position');
                $table->foreignId('Position')
                        ->references('id')
                        ->on('places');
                //$table->integer('Group')->unsigned()->default('1');
                $table->foreignId('Group')
                        ->default('1')
                        ->references('id')
                        ->on('groups');
    
                //$table->bigInteger('Scientific_Degree');
                $table->foreignId('Scientific_Degree')
                        ->references('id')
                        ->on('scientific_degrees');
                        //->onDelete('cascade');
    
                $table->foreignId('Scientific_Rank')
                        ->default('1')
                        ->references('id')
                        ->on('scientific_ranks');
                        //->onDelete('cascade');
    
                //$table->string('Scientific_Rank')->default('1');
                $table->string('Phone')->default('none');
                $table->string('Email')->default('none');
                $table->boolean('Planing_Status');
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
        Schema::dropIfExists('autors');
    }
}
