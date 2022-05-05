<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('Publication_Name');
            $table->string('Ext_Link')->default('none');
            //$table->string('Type')->default('none');
            $table->foreignId('Type')
                    ->references('id')
                    ->on('types');
            $table->string('Publication_Date')->default(date('Y-m-d'));
            //$table->string('Language')->default('1');
            $table->foreignId('Language')
                    ->default('1')
                    ->references('id')
                    ->on('languages');
            $table->string('Publisher')->default('none');
            $table->string('Issue_Number')->default('none');
            $table->string('Start_Page')->default('none');
            $table->string('End_Page')->default('none');
            $table->string('UPP')->default('none');
            //$table->string('Autor1')->nullable();
            $table->foreignId('Autor1')
                    ->nullable()
                    ->references('id')
                    ->on('autors');
            //$table->string('Autor2')->nullable();
            $table->foreignId('Autor2')
                    ->nullable()
                    ->references('id')
                    ->on('autors');
            //$table->string('Autor3')->nullable();
            $table->foreignId('Autor3')
                    ->nullable()
                    ->references('id')
                    ->on('autors');
            //$table->string('Autor4')->nullable();
            $table->foreignId('Autor4')
                    ->nullable()
                    ->references('id')
                    ->on('autors');
            //$table->string('Autor5')->nullable();
            $table->foreignId('Autor5')
                    ->nullable()
                    ->references('id')
                    ->on('autors');
            //$table->string('Autor6')->nullable();
            $table->foreignId('Autor6')
                    ->nullable()
                    ->references('id')
                    ->on('autors');
            //$table->string('Autor7')->nullable();
            $table->foreignId('Autor7')
                    ->nullable()
                    ->references('id')
                    ->on('autors');
                // supervisor
                $table->foreignId('Supervisor')
                    ->nullable()
                    ->references('id')
                    ->on('autors');

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
        Schema::dropIfExists('publications');
    }
}
