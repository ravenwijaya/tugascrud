<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawab', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi');
            $table->string('tanggaldibuat');
            $table->string('tanggaldiperbaharui')->nullable();
            $table->integer('idpertanyaan');
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawab');
    }
}
