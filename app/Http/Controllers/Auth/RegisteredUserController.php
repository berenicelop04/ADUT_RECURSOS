<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Rol;
use App\Models\Gender;
use App\Models\Carrera;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $data = Gender::all();
        $dataRol = Rol::all();
        $dataCarrera = Carrera::all();
        return view('auth.register')->with(compact('data','dataRol','dataCarrera'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'ape_paterno' => ['required', 'string', 'max:255'],
            'ape_materno' => ['required', 'string', 'max:255'],
            'gender' =>['required','numeric'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'ape_paterno' => $request->ape_paterno,
            'ape_materno' => $request->ape_materno,
            'genderId'=>$request->gender,
            'id_rol'=>$request->role,
            'id_carrera'=>$request->carrera,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
