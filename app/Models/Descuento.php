<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Descuento extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="descuentos";
    protected $primaryKey="id_descuento";
    protected $fillable=["desc_desc","porcentaje"];
}
