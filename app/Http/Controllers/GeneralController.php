<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use Illuminate\Support\Facades\View;
use Auth;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Accede al nobre de usuario
       // dd(Auth::user()->name);
       //Accede a la abreviatura 
       //dd(Auth::user()->gender->abreviatura);
       $data = General::all();
       //dd($data);
       return view('general.index')->with(compact('data'));
       //  dd($data->count());
      /* foreach($data as $item){
           dd($item->descripcion);
       } */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = General::all();
        return view('general.create')->with(compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $general = new General;
        $general->id_rol = $request->id_carrera;
        $general->id_carrera = $request->id_carrera;
        $general->created_at = date("Y-m-d h:m:s");
        $general->save();
        return redirect()->route('general.index');
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
        $general = General::find($id);
        return view('general.edit')->with(compact('general'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /* $general = General::find($id);
        $general->descripcion = $request->descripcion;
        $general->abreviatura = $request->abreviatura;
        $general->save();
        return redirect()->route('general.index'); */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = General::find($id)->delete();
        return redirect()->route('general.index');
    }
}
