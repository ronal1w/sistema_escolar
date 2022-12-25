@extends('layouts.app')

@section('template_title')
    {{ $notasEstudiantesMateria->name ?? 'Show Notas Estudiantes Materia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Notas Estudiantes Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notas-estudiantes-materias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Puntaje:</strong>
                            {{ $notasEstudiantesMateria->puntaje }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estudiante:</strong>
                            {{ $notasEstudiantesMateria->id_estudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Id Materia:</strong>
                            {{ $notasEstudiantesMateria->id_materia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
