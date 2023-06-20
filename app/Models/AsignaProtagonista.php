<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsignaProtagonista extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="asignaprotagonistas";
    protected $primaryKey="id_asignap";
    protected $fillable=["id_pelicula","id_protagonista"];


}
