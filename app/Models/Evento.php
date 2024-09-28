<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha',
        'descripcion',
        'centro_id',
        'estado'
    ];

    public function centro()
    {
        return $this->belongsTo(Centro::class);
    }
}
