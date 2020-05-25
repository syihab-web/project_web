<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';
    protected $fillable = ['nama_negara', 'benua', 'jml_positif', 'jml_sembuh', 'jml_meninggal', 'tanggal'];
}
