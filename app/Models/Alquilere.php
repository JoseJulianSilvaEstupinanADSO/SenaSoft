<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquilere extends Model
{
    use HasFactory;


    protected $fillable = [
        'hora_inicio',
        'hora_fin',
        'documento',
        'bicicleta_id'
    ];

    public function cicla()
    {
        return $this->belongsTo(Bicicleta::class);
    }
    public function facturas()
    {
        return $this->hasMany(Factura::class, 'alquiler_id'); // Relación con la tabla de facturas
    }
}
