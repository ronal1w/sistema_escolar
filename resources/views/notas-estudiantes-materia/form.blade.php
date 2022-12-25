<div class="box box-info padding-1">
    <div class="box-body">
        
       
        <div class="form-group">
            {{ Form::label('id_estudiante') }}
            {{ Form::select('id_estudiante',$estudiantes, $notasEstudiantesMateria->id_estudiante, ['class' => 'form-control' . ($errors->has('id_estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Id Estudiante']) }}
            {!! $errors->first('id_estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('id_materia') }}
            {{ Form::select('id_materia',$materias, $notasEstudiantesMateria->id_materia, ['class' => 'form-control' . ($errors->has('id_materia') ? ' is-invalid' : ''), 'placeholder' => 'Id Materia']) }}
            {!! $errors->first('id_materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('puntaje') }}
            {{ Form::text('puntaje', $notasEstudiantesMateria->puntaje, ['class' => 'form-control' . ($errors->has('puntaje') ? ' is-invalid' : ''), 'placeholder' => 'Puntaje']) }}
            {!! $errors->first('puntaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>