<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    use HasFactory;
    protected $table = 'tb_departamentos';
    protected $primaryKey = 'depa_codi';
    public $timestamps = false;
}
