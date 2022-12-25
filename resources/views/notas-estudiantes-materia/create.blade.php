@extends('layouts.app')

@section('template_title')
    Create Notas Estudiantes Materia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Notas Estudiantes Materia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('notas-estudiantes-materias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('notas-estudiantes-materia.form')

                                <div class="card-body">
                                    <div class="table-responsive">
                                         <table class="table table-striped table-hover">
                                             <h2>Calcular promedio</h2>
                                             <form>
                                              Primer Número:
                                              <input type="text" id="t1">
                                              
                                              Segundo Número:
                                              <input type="text" id="t2">
                                              
                                              Tercer Número:
                                              <input type="text" id="t3">
                                              <br>
                                              <input type="button" value="Calcular" onclick="Calcular();">
                                             </form> 
                                             <p id="promedio"></p>
                                             </body>
                                             <script> 
                                             function Calcular() { 
                                             var vr1 = document.getElementById('t1').value; 
                                             var vr2 = document.getElementById('t2').value; 
                                             var vr3 = document.getElementById('t3').value; 
                                             var p = (parseFloat(vr1)+parseFloat(vr2)+parseFloat(vr3))/3; document.getElementById('promedio').innerHTML = p; 
                                             }
                                             </script>           
                                             </table>
                                       </div>
                                </div>

                            </div>

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
