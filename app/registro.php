<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    //
    protected $fillable=['nombres','apellidos','usuario','correo','contrasena'];
}
