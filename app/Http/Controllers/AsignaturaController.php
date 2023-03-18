<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asignaturas=Asignatura::all();
        return view('index',compact('asignaturas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Asignatura::create([
            'asignatura'=>$request->asignatura,
            'actividad'=>$request->actividad,
            'cal'=>$request->cal,
        ]);

        return redirect()->back()->with('success','Se agrego correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $asig=Asignatura::find($id);

        return view('show',compact('asig'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $asig=Asignatura::find($id);
        return view('edit',compact('asig'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Asignatura::find($id)->update([
            'asignatura'=>$request->asignatura,
            'actividad'=>$request->actividad,
            'cal'=>$request->cal,
        ]);

        return redirect()->back()->with('success','Se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Asignatura::destroy($id);
        return redirect()->back()->with('success','Se elimino correctamente');
    }
}
