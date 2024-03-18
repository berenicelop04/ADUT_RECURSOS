<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListasDistribucion extends Model
{
    use HasFactory;

    protected  $table = 'tbl_listas_distribucion';

    protected $primaryKey = 'id_lista';

    public function tbl_usuarios(){
        return $this->hasOne(User::class, 'id_usuario','id_usuario');
    }
}
