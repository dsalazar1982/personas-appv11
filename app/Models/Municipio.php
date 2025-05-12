<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    //
    use HasFactory;
    protected $table = 'tb_municipios';
    protected $primaryKey = 'muni_codi';
    public $timestamps = false;
    protected $fillable = [
        'muni_codi',
        'muni_nomb',
        'muni_abre',
        'muni_esta',
        'comu_codi',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $casts = [
        'muni_codi' => 'integer',
        'muni_nomb' => 'string',
        'muni_abre' => 'string',
        'muni_esta' => 'boolean',
        'comu_codi' => 'integer',
    ];
}
