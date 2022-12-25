<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $nombre
 * @property $grupo
 * @property $created_at
 * @property $updated_at
 *
 * @property NotasEstudiantesMateria[] $notasEstudiantesMaterias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'grupo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','grupo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notasEstudiantesMaterias()
    {
        return $this->hasMany('App\Models\NotasEstudiantesMateria', 'id_estudiante', 'id');
    }
    

}
