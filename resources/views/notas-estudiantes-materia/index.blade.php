@extends('layouts.app')

@section('template_title')
    Notas Estudiantes Materia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Notas Estudiantes Materia') }}
                            </span>

                             <div class="float-right">

                                <a href="{{ route('notas-estudiantes-materias.pdf') }}" class="btn btn-primary btn-sm"  data-placement="left">
                                  {{ __('PDF') }}
                                </a>

                                <a href="{{ route('notas-estudiantes-materias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>

                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                     <br>
                                        <th>No</th>
                                        
										<th>Puntaje</th>
										<th>Estudiante</th>
										<th>Materia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                     
                                    @foreach ($notasEstudiantesMaterias as $notasEstudiantesMateria)

                                   
                                        <tr>
                                            
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $notasEstudiantesMateria->puntaje }}</td>
											<td>{{ $notasEstudiantesMateria->estudiante->nombre }}</td>
											<td>{{ $notasEstudiantesMateria->materia->nombre }}</td>
                                            

                                           

                                            <td>
                                                <form action="{{ route('notas-estudiantes-materias.destroy',$notasEstudiantesMateria->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('notas-estudiantes-materias.show',$notasEstudiantesMateria->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('notas-estudiantes-materias.edit',$notasEstudiantesMateria->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $notasEstudiantesMaterias->links() !!}
            </div>
        </div>
    </div>
@endsection
