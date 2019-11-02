<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_User')->unsigned()->index();
            $table->string('Nama_Artikel')->unique();
            $table->integer('Nomer_DOI_Artikel')->unique();
            $table->enum('kontribusi',['Penulis pertama','Penulis koresponden']); 
            $table->string('Cakupan_Bidang_Ilmu');
            $table->string('Alamat_Redaksi');
            $table->string('Alamat_URL');
            $table->string('Bidang_Ilmu_Pengusul');
            $table->string('Penerbit');
            $table->date('Tanggal_Penerbitan');
            $table->string('Nama_Program');
            $table->integer('Nomor_Kontrak');
            $table->string('Lembaga_Pemberi_Dana');
            $table->string('Tempat_Penelitian');
            $table->enum('keterangan',['Lulus','Tidak Lulus'])->nullable(); 
            $table->string('lampiran1')->nullable();
            $table->timestamps();
            //Set FK User -> posts
            $table->foreign('id_User')
            ->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
}
