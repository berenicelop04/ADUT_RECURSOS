<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recientes extends Model
{
    use HasFactory;

    protected  $table = 'tbl_recientes';

    protected $primaryKey = 'id_reciente';

    public function tbl_usuarios(){
        return $this->hasOne(User::class, 'id_usuario','id_usuario');
    }

}
