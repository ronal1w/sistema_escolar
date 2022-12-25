<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Materia;
use App\Models\NotasEstudiantesMateria;
use Illuminate\Http\Request;


/**
 * Class NotasEstudiantesMateriaController
 * @package App\Http\Controllers
 */
class NotasEstudiantesMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notasEstudiantesMaterias = NotasEstudiantesMateria::paginate();

        return view('notas-estudiantes-materia.index', compact('notasEstudiantesMaterias'))
            ->with('i', (request()->input('page', 1) - 1) * $notasEstudiantesMaterias->perPage());
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notasEstudiantesMateria = new NotasEstudiantesMateria();

        $estudiantes= Estudiante::pluck('nombre','id');

        $materias = Materia::pluck('nombre','id');

        return view('notas-estudiantes-materia.create', compact('notasEstudiantesMateria','estudiantes','materias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(NotasEstudiantesMateria::$rules);

        $notasEstudiantesMateria = NotasEstudiantesMateria::create($request->all());

        return redirect()->route('notas-estudiantes-materias.index')
            ->with('success', 'NotasEstudiantesMateria created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notasEstudiantesMateria = NotasEstudiantesMateria::find($id);

        return view('notas-estudiantes-materia.show', compact('notasEstudiantesMateria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notasEstudiantesMateria = NotasEstudiantesMateria::find($id);

        $estudiantes = Estudiante::pluck('nombre', 'id');

        $materias = Materia::pluck('nombre', 'id');

        return view('notas-estudiantes-materia.edit', compact('notasEstudiantesMateria', 'estudiantes', 'materias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  NotasEstudiantesMateria $notasEstudiantesMateria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotasEstudiantesMateria $notasEstudiantesMateria)
    {
        request()->validate(NotasEstudiantesMateria::$rules);

        $notasEstudiantesMateria->update($request->all());

        return redirect()->route('notas-estudiantes-materias.index')
            ->with('success', 'NotasEstudiantesMateria updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $notasEstudiantesMateria = NotasEstudiantesMateria::find($id)->delete();

        return redirect()->route('notas-estudiantes-materias.index')
            ->with('success', 'NotasEstudiantesMateria deleted successfully');
    }
}
