<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
       return view('pages.admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.user.stored');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            request()->validate([
                'name' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'last_name' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'ci' => 'required|string|max:20|regex:/^[0-9]+$/',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required',
            ], [
                'name.required' => 'El nombre es obligatorio.',
                'name.regex' => 'El nombre solo puede contener letras.',
                'last_name.required' => 'El apellido es obligatorio.',
                'last_name.regex' => 'El apellido solo puede contener letras.',
                'ci.required' => 'El CI es obligatorio.',
                'ci.regex' => 'El CI solo puede contener números.',
                'email.required' => 'El correo electrónico es obligatorio.',
                'email.email' => 'El formato del correo electrónico es inválido.',
                'email.unique' => 'El correo electrónico ya está en uso.',
                'password.required' => 'La contraseña es obligatoria.',
                'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
            ]);
            // Crear y guardar el nuevo usuario
            User::create([
                'name' => $request->name,
                'last_name' => $request->last_name,
                'ci' => $request->ci,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            // swalert2
                  return redirect()->route('user.index')->with('message', 'Los datos se han registrado corretamente.')
                  ->with('icono','success');
    } catch (\Throwable $th) {
        return redirect()->route('user.index')->with('message', 'verifique los datos e intente nuevamente.'. $th->getMessage())->with('icono','error');
    }
    // con alerta de adminlte
    //    return redirect()->route('user.index')->with('success', 'Los datos se han registrado corretamente.');
    // } catch (\Throwable $th) {
    //     return redirect()->route('user.index')->with('error', 'verifique los datos e intente nuevamente.'. $th->getMessage());
    // }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
