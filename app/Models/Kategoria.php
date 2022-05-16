<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Kategoria extends Model
{
    use HasFactory;

    protected $primaryKey='kategoria_id';

    protected $table='kategorias';
    protected $fillable = ['nev'];
    
}
