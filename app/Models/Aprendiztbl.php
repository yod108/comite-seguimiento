<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprendiztbl
 *
 * @property $id
 * @property $documento_ap
 * @property $nombre_ap
 * @property $email_ap
 * @property $created_at
 * @property $updated_at
 * @property $programa_id
 *
 * @property Programatbl $programatbl
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aprendiztbl extends Model
{   

    protected $table='aprendiztbl';
    protected $primaryKey='id';

    static $rules = [
		'documento_ap' => 'required',
		'nombre_ap' => 'required',
		'email_ap' => 'required',
		'programa_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'documento_ap',
        'nombre_ap',
        'email_ap',
        'programa_id'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programatbl()
    {
        return $this->hasOne('App\Models\Programatbl', 'id', 'programa_id');
    }
    

}
