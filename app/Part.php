<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = ['no_spp', 'nama_spp', 'jumlah', 'remarks'];
}
