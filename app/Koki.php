<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Koki extends Model
{
  protected  $table = 't_koki';
  public $primaryKey = 'id_koki';
  protected $fillable = ['nama_lengkap', 'jenis_kelamin', 'agama', 'alamat', 'no_telp', 'foto'];

  public $timestamps = false;
}
