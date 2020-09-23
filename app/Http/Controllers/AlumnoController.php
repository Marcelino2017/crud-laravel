<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('content.alumno', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // agregar nuevos estudiantes
        $alumno = new Alumno();

        $alumno->nombre   = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->edad     = $request->edad;
        $alumno->grado    = $request->grado;
        $alumno->turno    = $request->turno;

        $alumno->save();

        //return view('content.alumno');
        return redirect('alumno');

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        // $alumnos = DB::table('alummno')->get();
        // return view('content.alumno', compact('alumnos'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /**
         * Las findOrFaily firstOrFaillos métodos
         *  recuperará el primer resultado de la consulta; 
         * sin embargo, si no se encuentra ningún resultado, 
         * se lanzará un 
         * */
        $alumnos = Alumno::findOrFail($id);
        return view('content.editar', compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=>'required',
            'apellido' => 'required',
            'edad' => 'required',
            'grado' => 'required',
            'turno' => 'required'
        ]);

        $alumnos = Alumno::findOrFail($id);

        $alumnos->nombre   = $request->get('nombre');
        $alumnos->apellido = $request->get('apellido');
        $alumnos->edad     = $request->get('edad');
        $alumnos->grado    = $request->get('grado');
        $alumnos->turno    = $request->get('turno');

        //return $alumnos;
        $alumnos->update();
        return view('content.alumno');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
