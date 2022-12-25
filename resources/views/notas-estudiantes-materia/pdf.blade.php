<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Hola Soy tu reporte
    <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                       
                                        
										<th>Puntaje</th>
										<th>Estudiante</th>
										<th>Materia</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notasEstudiantesMaterias as $notasEstudiantesMateria)
                                        <tr>
                                            
											<td>{{ $notasEstudiantesMateria->puntaje }}</td>
											<td>{{ $notasEstudiantesMateria->estudiante->nombre }}</td>
											<td>{{ $notasEstudiantesMateria->materia->nombre }}</td>

                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
    
</body>
</html>