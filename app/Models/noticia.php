<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noticia extends Model
{
    use HasFactory;
    protected $primaryKey = 'idnoticia';
    protected $fillable = ["titulo", "descripcion", "portada_url", "tipo_noticia"];
}
