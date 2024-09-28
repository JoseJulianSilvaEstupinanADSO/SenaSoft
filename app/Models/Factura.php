<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'total',
        'alquiler_id'
    ];

    public function alquiler()
    {
        return $this->belongsTo(Alquilere::class, 'alquiler_id'); // Relación inversa con alquiler
    }
}
