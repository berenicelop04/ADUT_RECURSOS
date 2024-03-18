<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;
use Illuminate\Support\Facades\View;
use Auth;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // dd(Auth::user()->carrera);

        $data = Carrera::all();

        return view('carrera.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Carrera::all();
        return view('carrera.create')->with(compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carrera = new Carrera;
        $carrera->carrera = $request->carrera;
        $carrera->abr_carrera = $request->abr_carrera;
        $carrera->created_at = date("Y-m-d h:m:s");
        $carrera->save();
        return redirect()->route('carrera.index');
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
        $rol =Carrera::find($id);
        return view('carrera.edit')->with(compact('carrera'));//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $carrera = Carrera::find($id);
        $carrera->carrera = $request->carrera;
       
        $carrera->save();
        return redirect()->route('carrera.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Carrera::find($id)->delete();
        return redirect()->route('carrera.index');
    }
}
