<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    protected $fillable = ['title','description'];
    // protected $table = 'mitbla'; si es que no reconoce tu tabla por defecto
    use HasFactory;
}
