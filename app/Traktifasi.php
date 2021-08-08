<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Traktifasi extends Authenticatable
{
    protected $table = "traktifasi";
    protected $primaryKey = "NoEkop";
    public $timestamps = false;
}
