<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('t_makanan', function(Blueprint $table){
        //     $table->increments('id_makanan');
        //     $table->increments('id_makanan');
        //     $table->string('nama_kelas', 15);
        //     $table->string('jurusan', 100);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('t_kelas');
    }
}
