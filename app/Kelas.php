<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected  $table = 't_kelas';
    public $primaryKey = 'id_kelas';
    protected $fillable = ['nama_kelas', 'jurusan'];

    public $timestamps = false;
}
