<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Recientes;
use Illuminate\Support\Facades\View;
use Auth;

class RecientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $data = Recientes::all();

        return view('recientes.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Recientes::all();
        return view('recientes.create')->with(compact('data'));
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
        $recientes = Recientes::find($id);
        return view('recientes.edit')->with(compact('recientes'));
      /*  $data = user::find($id);
        return view('recientes.edit')->with(compact('data'));*/
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, string $id)
    {
        $user = Recientes::find($id);
        $recientes->name = $request->name;
        $recientes->email = $request->email;
       
        $recientes->save();
        return redirect()->route('recientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $recientes = Recientes::find($id)->delete();
        return redirect()->route('recientes.index');
    }
}
