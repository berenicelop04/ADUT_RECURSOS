<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;
use Illuminate\Support\Facades\View;
use Auth;

class GenderController extends Controller
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
        $data = Gender::all();
        

        return view('gender.index')->with(compact('data'));
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
        $data = Gender::all();
        return view('gender.create')->with(compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $genero = new Gender;
        $genero->descripcion = $request->descripcion;
        $genero->abreviatura = $request->abreviatura;
        $genero->created_at = date("Y-m-d h:m:s");
        $genero->save();
        return redirect()->route('gender.index');
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
        $genero = Gender::find($id);
        return view('gender.edit')->with(compact('genero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $genero = Gender::find($id);
        $genero->descripcion = $request->descripcion;
        $genero->abreviatura = $request->abreviatura;
        $genero->save();
        return redirect()->route('gender.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Gender::find($id)->delete();
        return redirect()->route('gender.index');
    }
}
