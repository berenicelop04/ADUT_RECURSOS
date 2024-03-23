<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model; //MONGODB

class Gender extends Model
{
    use HasFactory;
    // MongoDB -> Se comento por que voy a usar sql
    protected $connection = "mongodb";
    protected $collection = "genders"; //este es el nombre de la base de datos en mongo
    protected $primarykey = "genderId"; //el id es el de la coleccion de mongo
    /*  protected  $table = 'genders';

    protected $primaryKey = 'genderId';*/
   
    
}