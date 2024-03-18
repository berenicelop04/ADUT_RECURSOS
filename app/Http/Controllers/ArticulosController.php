<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Articulos;
use Illuminate\Support\Facades\View;
use Auth;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $data = Articulos::all();

        return view('articulos.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Articulos::all();
        return view('articulos.create')->with(compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $articulos = Articulos::find($id);
        return view('articulos.edit')->with(compact('articulos'));
      /*  $data = user::find($id);
        return view('articulos.edit')->with(compact('data'));*/
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, string $id)
    {
        $user = Articulos::find($id);
        $articulos->name = $request->name;
        $articulos->email = $request->email;
       
        $articulos->save();
        return redirect()->route('articulos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articulos = Articulos::find($id)->delete();
        return redirect()->route('articulos.index');
    }
}
