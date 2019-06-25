<?php

namespace App\Models\Administrador;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = ['nombre', 'url', 'icono'];
    protected $guarded = ['id'];
}
