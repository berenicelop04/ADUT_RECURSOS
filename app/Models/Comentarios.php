<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;
    protected  $table = 'comentarios';

    protected $primaryKey = 'id_comentario';
    
    public function tbl_tipo_documento(){
        return $this->hasOne(TipoDocumento::class, 'id_tipo_documento','id_tipo_documento');
    }

    public function tbl_usuarios(){
        return $this->hasOne(User::class, 'id_usuario','id_usuario');
    }


}
