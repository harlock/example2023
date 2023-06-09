<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cine extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey="id_cine";
    protected $fillable=["calle","numero","telefono"];

}
