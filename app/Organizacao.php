<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacao extends Model
{
    protected $table = 'organizacoes';   
    protected $primaryKey = "id";

    public $timestamps = false;

    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';
}
