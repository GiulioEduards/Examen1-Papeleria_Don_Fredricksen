<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //use HasFactory;

    protected $table = 'productos';
    protected $fillable = [
        'nombre',
        'precio',
        'marcas_id'
    ];
        public function marca()
    {
        return $this->belongsTo(Marca::class, 'marcas_id');
        // Si tu clave foránea tiene otro nombre, cámbialo aquí
    }
}
