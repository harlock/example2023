<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Protagonista extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="protagonistas";
    protected $primaryKey="id_protagonista";
    protected $fillable=["nombre_p","ap_p","am_p"];
}
