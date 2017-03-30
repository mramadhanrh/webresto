<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('t_koki', function(Blueprint $table){
        //   $table->increments('id_koki');
        //   $table->string('nama_lengkap', 50);
        //   $table->enum('jenis_kelamin', array('Laki-Laki', 'Perempuan'));
        //   $table->enum('agama', array('Islam', 'Kristen', 'Hindu', 'Budha', 'Shinto', 'Lainnya'));
        //   $table->string('alamat', 255);
        //   $table->string('no_telp', 25);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('t_koki');
    }
}
