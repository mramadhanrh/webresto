<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
  protected  $table = 't_minuman';
  public $primaryKey = 'id_minuman';
  protected $fillable = ['nama_minuman', 'harga_minuman', 'nama_koki', 'foto'];

  public $timestamps = false;
}
