<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsavelReserva extends Model
{
    use HasFactory;

    protected $table = 'responsaveis_reservas';
    protected $guarded = ['id'];

    public function reservas(){
        return $this->belongsToMany(Reserva::class);
    }
}
