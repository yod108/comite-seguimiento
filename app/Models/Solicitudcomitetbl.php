<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Solicitudcomitetbl
 *
 * @property $id
 * @property $descripcion_co
 * @property $documento
 * @property $Fecha
 * @property $created_at
 * @property $updated_at
 * @property $apoyoin_id
 * @property $gestor_id
 * @property $aprendiz_id
 *
 * @property Aprendiztbl $aprendiztbl
 * @property Instructortbl $instructortbl
 * @property Instructortbl $instructortbl
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Solicitudcomitetbl extends Model
{

    protected $table='solicitudcomitetbl';
    protected $primaryKey='id';

  
    static $rules = [
		'descripcion_co' => 'required',
		'documento' => 'required',
		'Fecha' => 'required',
		'apoyoin_id' => 'required',
		'gestor_id' => 'required',
		'aprendiz_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion_co','documento','Fecha','apoyoin_id','gestor_id','aprendiz_id'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function aprendiztbl()
    {
        return $this->hasOne('App\Models\Aprendiztbl', 'id', 'aprendiz_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function instructortbl()
    {
        return $this->hasOne('App\Models\Instructortbl', 'id', 'apoyoin_id');
    }
}
