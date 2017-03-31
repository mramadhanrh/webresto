<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableMinuman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('t_minuman', function(Blueprint $table){
        $table->increments('id_minuman');
        $table->string('nama_minuman', 50);
        $table->integer('harga_minuman');
        $table->string('nama_koki', 50);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_minuman');
    }
}
