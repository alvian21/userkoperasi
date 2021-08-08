<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Msanggota extends Authenticatable

{
    protected $table = "msanggota";
    public $timestamps = false;
    protected $primaryKey = "Kode";
    public $incrementing = false;
    protected $keyType = 'string';
}
