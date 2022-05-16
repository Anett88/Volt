<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Ingatlan extends Model
{
    use HasFactory;

    protected $primaryKey='id';

    protected $table='ingatlans';

    protected $fillable = ['kategoria_id','tehermentes','ar','hirdetesDatuma','pontszam','kepUrl'];
}
