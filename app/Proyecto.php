<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/* es un ORM */

class Proyecto extends Model
{
    //
    protected $table="dbo.Proyecto";//CONEXION CON LA BASE DE DATOS
    public $timestamps=false;
}
