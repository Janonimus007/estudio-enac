<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    protected $fillable = ['title','description'];
// protected $guarded = ['id','create_at']; // son los datos que no queremos que se guarden masivamente en caso de tenerlos

// protected $table = 'mitbla'; si es que no reconoce tu tabla por defecto
    use HasFactory;
}
