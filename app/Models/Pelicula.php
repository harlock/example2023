<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelicula extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="peliculas";
    protected $primaryKey="id_pelicula";
    protected $fillable=["titulo", "id_genero","id_clasificacion","id_director","portada"];

    public function getDirector()
    {
       return  $this->hasOne(Director::class,"id_director","id_director");
    }
    public function getProtagonistas(){
        return $this->hasMany(AsignaProtagonista::class,"id_pelicula","id_pelicula")->get()->pluck("id_protagonista");
    }

}
