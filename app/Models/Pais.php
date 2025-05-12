<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    //
    use HasFactory;
    protected $table = 'tb_paises';
    protected $primaryKey = 'pais_codi';
    public $timestamps = false;
    protected $fillable = [
        'pais_codi',
        'pais_nomb',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $casts = [
        'pais_codi' => 'string',
        'pais_nomb' => 'string',
    ];
}
