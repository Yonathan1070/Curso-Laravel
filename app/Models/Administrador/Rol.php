<?php

namespace App\Models\Administrador;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "rol";
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
