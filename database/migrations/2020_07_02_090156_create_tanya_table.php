<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanyaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanya', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('isi');
            $table->string('tanggaldibuat');
            $table->string('tanggaldiperbaharui')->nullable();
        //    $table->integer('jawabandipilih')->nullable();
         //   $table->integer('id_user')->nullable();
         //   $table->integer('vote')->nullable();
          //  $table->integer('like')->nullable();
           // $table->integer('dislike')->nullable();
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanya');
    }
}
