@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-body">
                    <form action="{{ route('alumno.update', $alumno->id) }}" method="POST" enctype="multipart/form-data" id="form">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputNombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="{{ $alumno->nombre }}" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="inputNombre">Apellido</label>
                            <input type="text" name="apellido" class="form-control" value="{{ $alumno->apellido }}" placeholder="Apellido" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEdad">Edad</label>
                                <input type="text" name="edad" class="form-control" value="{{ $alumno->edad }}" placeholder="Edad" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputGrupo">Grado</label>
                                <input type="text" name="grado" class="form-control" value="{{ $alumno->grado }}" placeholder="Grado" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputGrupo">Turno</label>
                                <input type="text" name="turno" class="form-control" value="{{ $alumno->turno }}" placeholder="Turno" required>
                            </div>
                        </div>

                        <button class="btn btn-block btn-success" type="submit">Actualizar Datos</button>
                                    
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection