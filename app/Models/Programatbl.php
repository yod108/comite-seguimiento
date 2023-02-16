<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programatbl
 *
 * @property $id
 * @property $codigo_pro
 * @property $nombre_pro
 * @property $Fechaini
 * @property $created_at
 * @property $updated_at
 *
 * @property Aprendiztbl[] $aprendiztbls
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Programatbl extends Model
{
    
    protected $table='programatbl';
    protected $primaryKey='id';

    static $rules = [
      'codigo_pro' => 'required',
      'nombre_pro' => 'required',
      'Fechaini' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
      'codigo_pro','nombre_pro','Fechaini'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aprendiztbls()
    {
        return $this->hasMany('App\Models\Aprendiztbl', 'programa_id', 'id');
    }   
}
