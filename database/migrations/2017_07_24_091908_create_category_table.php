<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('category', function (Blueprint $table) {
             $table->increments('category_id');
             $table->string('category_name');
             $table->string('category_folder');
             $table->enum('category_type', ['0', '1'])->default('0')->comment('0: TV/WEB, 1: BD/DVD');
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
         Schema::dropIfExists('category');
     }
}
