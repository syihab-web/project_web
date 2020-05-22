<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';
    protected $fillable = ['nama_provinsi', 'jml_positif', 'jml_sembuh', 'jml_meninggal'];
}
