<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoritos extends Model
{
    use HasFactory;
    protected  $table = 'tbl_favoritos';

    protected $primaryKey = 'id_favorito';

    public function tbl_usuarios(){
        return $this->hasOne(User::class, 'id_usuario','id_usuario');
    }

    public function tbl_tipo_documento(){
        return $this->hasOne(TipoDocumento::class, 'id_tipo_documento','id_tipo_documento');
    }
}
