<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    use HasFactory;
    protected $fillable = ['denunciante', 'fecha_denuncia', 'ubicacion', 'audio', 'foto' , 'video', 'victima_o_testigo', 'tipo'];
}
