<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleId extends Model
{
    use HasFactory;

    protected  $table = 'tbl_detalle_id';

    protected $primaryKey = 'id_detalle';
    
    public function tbl_tipo_documento(){
        return $this->hasOne(TipoDocumento::class, 'id_tipo_documento','id_tipo_documento');
    }

    public function tbl_listas_distribucion(){
        return $this->hasOne(DetalleId::class, 'id_lista','id_lista');
    }


}
