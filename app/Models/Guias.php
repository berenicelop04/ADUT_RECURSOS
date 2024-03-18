<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guias extends Model
{
    use HasFactory;
    protected  $table = 'tbl_guias';

    protected $primaryKey = 'id_guia';

   
    public function tbl_tipo_documento(){
        return $this->hasOne(TipoDocumento::class, 'id_tipo_documento','id_tipo_documento');
    }
    public function tbl_atutores(){
        return $this->hasOne(Autor::class, 'id_autor','id_autor');
    }
    public function tbl_genero(){
        return $this->hasOne(Genero::class, 'id_genero','id_genero');
    }
    public function tbl_editorial(){
        return $this->hasOne(Editorial::class, 'id_editorial','id_editorial');
    }
    public function tbl_materia(){
        return $this->hasOne(Materia::class, 'id_materia','id_materia');
    }


    
}
