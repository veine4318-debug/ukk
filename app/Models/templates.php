<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
#[Fillable('nama_template',)]

class templates extends Model
{
    protected $primarykey = 'id_template';
}
