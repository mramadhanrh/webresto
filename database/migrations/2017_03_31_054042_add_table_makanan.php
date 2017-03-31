<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableMakanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_makanan', function(Blueprint $table){
        $table->increments('id_makanan');
        $table->string('nama_makanan', 50);
        $table->integer('harga_makanan');
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
        Schema::drop('t_makanan');
    }
}
