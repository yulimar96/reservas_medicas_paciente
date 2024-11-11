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
        $users = User::where('active', '=', 1)->get();
       return view('pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.user.stored');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            request()->validate([
                'name' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'surname1' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'ci' => 'required|string|max:20|regex:/^[0-9]+$/',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required',
            ], [
                'name.required' => 'El nombre es obligatorio.',
                'name.regex' => 'El nombre solo puede contener letras.',
                'surname1.required' => 'El apellido es obligatorio.',
                'surname1.regex' => 'El apellido solo puede contener letras.',
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
                'surname1' => $request->surname1,
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
        $user = User::find($id);
    return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // Validar los datos de entrada
            request()->validate([
                'name' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'surname1' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'ci' => 'required|string|max:20|regex:/^[0-9]+$/',
                'email' => 'required|email|max:255|unique:users,email,' . $id, // Permitir el mismo correo electrónico
                'password' => 'nullable|min:6', // La contraseña es opcional en la actualización
            ], [
                'name.required' => 'El nombre es obligatorio.',
                'name.regex' => 'El nombre solo puede contener letras.',
                'surname1.required' => 'El apellido es obligatorio.',
                'surname1.regex' => 'El apellido solo puede contener letras.',
                'ci.required' => 'El CI es obligatorio.',
                'ci.regex' => 'El CI solo puede contener números.',
                'email.required' => 'El correo electrónico es obligatorio.',
                'email.email' => 'El formato del correo electrónico es inválido.',
                'email.unique' => 'El correo electrónico ya está en uso.',
                'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
            ]);

            // Buscar el usuario existente
            $user = User::findOrFail($id);

            // Actualizar los campos del usuario
            $user->name = $request->name;
            $user->surname1 = $request->surname1;
            $user->ci = $request->ci;
            $user->email = $request->email;
            // Si se proporciona una nueva contraseña, actualizarla
            if ($request->filled('password')) {
                $user->password = bcrypt($request->password);
            }

            // Guardar los cambios
            $user->save();

            // Redirigir con un mensaje de éxito
            return redirect()->route('user.index')->with('message', 'Los datos se han actualizado correctamente.')
                ->with('icono', 'success');
        } catch (\Throwable $th) {
            // Manejo de errores
            return redirect()->route('user.index')->with('message', 'Verifique los datos e intente nuevamente. ' . $th->getMessage())
                ->with('icono', 'error');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encuentra al usuario por su ID
        $user = User::find($id);

        // Verifica si el usuario existe
        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado.'], 404);
        }

        // Deshabilitar al usuario
        $user->active = false;
        $user->save();

        return redirect()->route('user.index')->with('message', 'El usuario ha sido deshabilitado correctamente.')->with('icono', 'success');

    }
}
