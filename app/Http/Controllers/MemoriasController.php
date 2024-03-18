<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Memorias;
use Illuminate\Support\Facades\View;
use Auth;

class MemoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $data = Memorias::all();

        return view('memorias.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Memorias::all();
        return view('memorias.create')->with(compact('data'));
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
        $memorias = Memorias::find($id);
        return view('memorias.edit')->with(compact('memorias'));
      /*  $data = user::find($id);
        return view('memorias.edit')->with(compact('data'));*/
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, string $id)
    {
        $user = Memorias::find($id);
        $memorias->name = $request->name;
        $memorias->email = $request->email;
       
        $memorias->save();
        return redirect()->route('memorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $memorias = Memorias::find($id)->delete();
        return redirect()->route('memorias.index');
    }
}
