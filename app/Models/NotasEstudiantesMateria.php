<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NotasEstudiantesMateria
 *
 * @property $id
 * @property $puntaje
 * @property $id_estudiante
 * @property $id_materia
 *
 * @property Estudiante $estudiante
 * @property Materia $materia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class NotasEstudiantesMateria extends Model
{
    
    static $rules = [
		'puntaje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['puntaje','id_estudiante','id_materia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'id', 'id_estudiante');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materia()
    {
        return $this->hasOne('App\Models\Materia', 'id', 'id_materia');
    }
    

}
