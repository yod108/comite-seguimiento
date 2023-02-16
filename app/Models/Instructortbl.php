<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Instructortbl
 *
 * @property $id
 * @property $documento_in
 * @property $nombre_in
 * @property $email_in
 * @property $created_at
 * @property $updated_at
 * @property $programa_id
 *
 * @property Programatbl $programatbl
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Instructortbl extends Model
{
    protected $table='instructortbl';
    protected $primaryKey='id';

    static $rules = [
		'documento_in' => 'required',
		'nombre_in' => 'required',
		'email_in' => 'required',
		'programa_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
      'documento_in','nombre_in','email_in','programa_id'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programatbl()
    {
        return $this->hasOne('App\Models\Programatbl', 'id', 'programa_id');
    }
    

}
