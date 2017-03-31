<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
  protected  $table = 't_makanan';
  public $primaryKey = 'id_makanan';
  protected $fillable = ['nama_makanan', 'harga_makanan', 'nama_koki', 'foto'];

  public $timestamps = false;
}
