<?php

use Illuminate\Database\Seeder;

class t_siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $datasiswa = [
        "nis" 	          =>  "123123123",
        "nama_lengkap" 		=>  "Nama Test",
        "jenis_kelamin"   =>  "Laki-Laki",
        "agama"           =>  "Islam",
        "alamat"          =>  "Jl.alamat",
        "no_telp"         =>  "081290239203",
        "nama_kelas"      =>  "XII RPL 2"
      ];
      DB::table('t_siswa')->insert($datasiswa);
    }
}
