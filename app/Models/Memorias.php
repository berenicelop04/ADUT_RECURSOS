<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memorias extends Model
{
    use HasFactory;
    protected  $table = 'tbl_memorias';

    protected $primaryKey = 'id_memoria';

    public function tbl_tipo_documento(){
        return $this->hasOne(TipoDocumento::class, 'id_tipo_documento','id_tipo_documento');
    }

    public function atutores(){
        return $this->hasOne(Autor::class, 'id_autor','id_autor');
    }

    public function carreras(){
        return $this->hasOne(Carrera::class, 'id_carrera','id_carrera');
    }

    public function tbl_usuarios(){
        return $this->hasOne(Usuario::class, 'id_tutor','id_tutor');
    }

}
