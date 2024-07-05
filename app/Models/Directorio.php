<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
    use HasFactory;
    protected $primarykey= 'codigoEntrada';
    protected $table = 'directorios';
    public $timestamps= false;
}
