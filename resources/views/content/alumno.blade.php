@extends('layouts.app')
@section('content')    
    <div class="container">
        <div class="row">
            <!--Formulario-->
            <div class="col-sm-4">
                <div class="card-body">
                    <form action="alumno" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputNombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="" placeholder="Nombre" required >
                        </div>
                        <div class="form-group">
                            <label for="inputNombre">Apellido</label>
                            <input type="text" name="apellido" class="form-control" value="" placeholder="Apellido" required >
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEdad">Edad</label>
                                <input type="text" name="edad" class="form-control" value="" placeholder="Edad" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputGrupo">Grado</label>
                                <input type="text" name="grado" class="form-control" value="" placeholder="Grado" required >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputGrupo">Turno</label>
                                <input type="text" name="turno" class="form-control" value="" placeholder="Turno" required >
                            </div>
                        </div>

                        <button class="btn btn-block btn-success" id="guardar" type="submit">Guardar</button>
                                    
                    </form>
                </div>
            </div>
            <!--Tabla-->
            <div class="col-sm-8">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Grado</th>
                        <th scope="col">Turno</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnos as $alumno)
                            <tr>
                                <th scope="row">{{ $alumno->id }}</th>
                                <td>{{ $alumno->nombre }}</td>
                                <td>{{ $alumno->apellido }}</td>
                                <td>{{ $alumno->edad }}</td>
                                <td>{{ $alumno->grado }}</td>
                                <td>{{ $alumno->turno }}</td>
                                <td>
                                    
                                    <a href="{{ route('alumno.edit', $alumno->id) }}"> <button class="btn btn-success btn-sm">EDITAR</button> </a>


                                    <button class="btn btn-danger btn-sm">ELIMINAR</button>
                                </td>
                            </tr>
                        @endforeach                     
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection