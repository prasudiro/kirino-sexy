<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('file', function (Blueprint $table) {
             $table->increments('file_id');
             $table->string('file_size');
             $table->integer('file_category');
             $table->string('file_name');
             $table->integer('file_download')->default('0');
             $table->integer('deleted')->default('0')->comment('0: Exist, 1: Delete');
             $table->integer('created_by')->default('1');
             $table->integer('updated_by')->default('1');
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
         Schema::dropIfExists('file');
     }
}
