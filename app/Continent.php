<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $table = 'continent';
    protected $guarded = ['id_benua'];
}
