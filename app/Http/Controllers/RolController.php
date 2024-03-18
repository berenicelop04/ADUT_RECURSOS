<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;
use Illuminate\Support\Facades\View;
use Auth;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // dd(Auth::user()->rol);

        $data = Rol::all();

        return view('rol.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Rol::all();
        return view('rol.create')->with(compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rol = new Rol;

        // Verificar que $request->rol no sea nulo o vacío
        if ($request->has('rol') && !empty($request->rol)) {
            $rol->rol = $request->rol;
        } else {
            // Manejo del caso cuando $request->rol es nulo o vacío
            // Puedes redirigir de nuevo al formulario con un mensaje de error, por ejemplo.
            return redirect()->back()->with('error', 'El campo Rol no puede estar vacío.');
        }
        
        $rol->created_at = now();
        $rol->save();
        return redirect()->route('rol.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rol = Rol::find($id);
        return view('rol.edit')->with(compact('rol'));//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rol = Rol::find($id);
        $rol->rol = $request->rol;
       
        $rol->save();
        return redirect()->route('rol.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Rol::find($id)->delete();
        return redirect()->route('rol.index');
    }
}
