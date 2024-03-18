<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Guias;
use Illuminate\Support\Facades\View;
use Auth;

class GuiasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $data = Guias::all();

        return view('guias.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Guias::all();
        return view('guias.create')->with(compact('data'));
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
        $guias = Guias::find($id);
        return view('guias.edit')->with(compact('guias'));
      /*  $data = user::find($id);
        return view('guias.edit')->with(compact('data'));*/
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, string $id)
    {
        $user = Guias::find($id);
        $guias->name = $request->name;
        $guias->email = $request->email;
       
        $guias->save();
        return redirect()->route('guias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guias = Guias::find($id)->delete();
        return redirect()->route('guias.index');
    }
}
