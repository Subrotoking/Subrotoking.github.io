<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesPengesahanTable extends Migration
{ /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('pengesahan', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('id_post')->nullable()->unsigned()->index();
           $table->string('nama_pimpinan');
           $table->string('jabatan_pimpinan');
           $table->integer('NIP_pengesahan');
           //set FK
           $table->foreign('id_post')->references('id')->on('posts')->onUpdate('CASCADE')->onDelete('CASCADE');
       });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::dropIfExists('pengesahan');
   }
}
