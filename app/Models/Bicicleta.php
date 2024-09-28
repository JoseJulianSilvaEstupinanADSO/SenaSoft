<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicicleta extends Model
{
    use HasFactory;

    protected $fillable = [
        'color',
        'marca',
        'estado',
        'precio',
        'centro_id',
    ];

    public function centro()
    {
        return $this->belongsTo(Centro::class);
    }

    public function alquileres()
    {
        return $this->hasMany(Alquilere::class);
    }
}
