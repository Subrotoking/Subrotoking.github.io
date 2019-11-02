<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLpengindex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lpengindexs', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('Nama_lembaga');
            $table->string('Lembaga_penilai');
            $table->string('url_lembaga');
            $table->string('url_if');
            $table->string('url_h_index');
            $table->timestamps();
        });
        Schema::table('Lpengindexs',function(Blueprint $table){
            $table->integer('id_post')->unsigned();
            $table->foreign('id_post')
            ->references('id')
            ->on('posts')
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
        $table->dropForeign('posts_id_foreign');
        Schema::dropIfExists('Lpengindexs');
    }
}
