<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Pacientes::paginate(5);
        return view ('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $pacientes = new Pacientes();

            $pacientes->id = $request->get('id');
            $pacientes->documento = $request->get('documento');
            $pacientes->tipodocumento = $request->get('tipoDocumento');
            $pacientes->nombres = $request->get('nombres');
            $pacientes->apellidos = $request->get('apellidos');
            $pacientes->direccion = $request->get('direccion');
            $pacientes->telefono = $request->get('telefono');
            $pacientes->genero = $request->get('genero');
            $pacientes->fechanacimiento = $request->get('fechaNacimiento');
            $pacientes->estadocivil = $request->get('estadoCivil');
    
            $pacientes->save();
    
            return redirect('/pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show(Pacientes $pacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Pacientes $pacientes, $id)
    {
        $pacientes = Pacientes::find($id);
        return view('pacientes.editar')->with('paciente', $pacientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $pacientes = Pacientes::find($id);

            $pacientes->id = $request->get('id');
            $pacientes->documento = $request->get('documento');
            $pacientes->tipodocumento = $request->get('tipoDocumento');
            $pacientes->nombres = $request->get('nombres');
            $pacientes->apellidos = $request->get('apellidos');
            $pacientes->direccion = $request->get('direccion');
            $pacientes->telefono = $request->get('telefono');
            $pacientes->genero = $request->get('genero');
            $pacientes->fechanacimiento = $request->get('fechaNacimiento');
            $pacientes->estadocivil = $request->get('estadoCivil');
    
            $pacientes->save();
    
            return redirect('/pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pacientes = Pacientes::find($id);
        $pacientes->delete();
        return redirect()->route('pacientes.index');
    }
}
