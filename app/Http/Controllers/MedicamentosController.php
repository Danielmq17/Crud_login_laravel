<?php

namespace App\Http\Controllers;

use App\Models\Medicamentos;
use Illuminate\Http\Request;

class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamentos = Medicamentos::paginate(5);
        return view ('medicamentos.index', compact('medicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicamentos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicamentos = new Medicamentos();

            $medicamentos->id = $request->get('id');
            $medicamentos->nombre = $request->get('nombre');
            $medicamentos->precio = $request->get('precio');
            
            $medicamentos->save();
    
            return redirect('/medicamentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamentos $medicamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicamentos $medicamentos, $id)
    {
        $medicamentos = Medicamentos::find($id);
        return view('medicamentos.editar')->with('medicamento', $medicamentos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medicamentos = Medicamentos::find($id);

            $medicamentos->id = $request->get('id');
            $medicamentos->nombre = $request->get('nombre');
            $medicamentos->precio = $request->get('precio');
            
            $medicamentos->save();
    
            return redirect('/medicamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicamentos = Medicamentos::find($id);
        $medicamentos->delete();
        return redirect()->route('medicamentos.index');
    }
}
