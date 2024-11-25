<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Persons;

class PersonController extends Controller
{
    public function index()
    {
        $person = Persons::where('active', '=', 1)->get();
        return view('pages.user.index', compact('person'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            // Validar los datos de entrada
            $validatedData = $request->validate([
                'name_1' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'name_2' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'surname_1' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'surname_2' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'identity_number' => 'required|string|max:20|regex:/^[0-9]+$/',
                'sex' =>'required',
                'birth_date' =>'required',
                'email' => 'required|email|max:255|unique:users,email', // El correo debe ser único
                'password' => 'required|min:6', // La contraseña es obligatoria
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validar la imagen
                'potition_id' =>'required',
                'organizational_unit_types_id' =>'required',
                'employee_contract_types_id' =>'required',
                'role_id' =>'required',
            ], [
                'name_1.required' => 'El nombre es obligatorio.',
                'name_1.regex' => 'El nombre solo puede contener letras.',
                'name_2.required' => 'El nombre es obligatorio.',
                'name_2.regex' => 'El nombre solo puede contener letras.',
                'surname_1.required' => 'El apellido es obligatorio.',
                'surname_1.regex' => 'El apellido solo puede contener letras.',
                'surname_2.required' => 'El apellido es obligatorio.',
                'surname_2.regex' => 'El apellido solo puede contener letras.',
                'identity_number.required' => 'El CI es obligatorio.',
                'identity_number.regex' => 'El CI solo puede contener números.',
                'email.required' => 'El correo electrónico es obligatorio.',
                'email.email' => 'El formato del correo electrónico es inválido.',
                'email.unique' => 'El correo electrónico ya está en uso.',
                'password.required' => 'La contraseña es obligatoria.',
                'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
                'image.image' => 'El archivo debe ser una imagen.',
                'image.mimes' => 'La imagen debe ser de tipo: jpeg, png, jpg, gif.',
                'image.max' => 'La imagen no debe pesar más de 2MB.',
            ]);

            // Crear un nuevo usuario
            $user = new Persons();
            $user->name = $validatedData['name'];
            $user->surname1 = $validatedData['surname1'];
            $user->ci = $validatedData['ci'];
            $user->email = $validatedData['email'];
            $user->password = bcrypt($validatedData['password']); // Encriptar la contraseña

            // Manejar la imagen
            if ($request->hasFile('image')) {
                // Subir la nueva imagen
                $path = $request->file('image')->store('images', 'public'); // Guardar en el directorio 'storage/app/public/images'
                $user->image = $path; // Guardar la ruta en la base de datos
            }

            // Guardar el nuevo usuario
            $user->save();

            // Redirigir con un mensaje de éxito
            return redirect()->route('user.index')->with('message', 'El usuario se ha creado correctamente.')
                ->with('icono', 'success');
        } catch (\Throwable $th) {
            // Manejo de errores
            return redirect()->route('user.index')->with('message', 'Verifique los datos e intente nuevamente. ' . $th->getMessage())
                ->with('icono', 'error');
        }
    // con alerta de adminlte
    //    return redirect()->route('user.index')->with('success', 'Los datos se han registrado corretamente.');
    // } catch (\Throwable $th) {
    //     return redirect()->route('user.index')->with('error', 'verifique los datos e intente nuevamente.'. $th->getMessage());
    // }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        try {
            // Validar los datos de entrada
            $validatedData = $request->validate([
                'name_1' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'name_2' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'surname_1' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'surname_2' => 'required|string|max:255|regex:/^[a-zA-Z]+$/',
                'identity_number' => 'required|string|max:20|regex:/^[0-9]+$/',
                'sex' =>'required',
                'birth_date' =>'required',
                'email' => 'required|email|max:255|unique:users,email', // El correo debe ser único
                'password' => 'required|min:6', // La contraseña es obligatoria
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validar la imagen
                'potition_id' =>'required',
                'organizational_unit_types_id' =>'required',
                'employee_contract_types_id' =>'required',
                'role_id' =>'required',
            ], [
                'name_1.required' => 'El nombre es obligatorio.',
                'name_1.regex' => 'El nombre solo puede contener letras.',
                'name_2.required' => 'El nombre es obligatorio.',
                'name_2.regex' => 'El nombre solo puede contener letras.',
                'surname_1.required' => 'El apellido es obligatorio.',
                'surname_1.regex' => 'El apellido solo puede contener letras.',
                'surname_2.required' => 'El apellido es obligatorio.',
                'surname_2.regex' => 'El apellido solo puede contener letras.',
                'identity_number.required' => 'El CI es obligatorio.',
                'identity_number.regex' => 'El CI solo puede contener números.',
                'email.required' => 'El correo electrónico es obligatorio.',
                'email.email' => 'El formato del correo electrónico es inválido.',
                'email.unique' => 'El correo electrónico ya está en uso.',
                'password.required' => 'La contraseña es obligatoria.',
                'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
                'image.image' => 'El archivo debe ser una imagen.',
                'image.mimes' => 'La imagen debe ser de tipo: jpeg, png, jpg, gif.',
                'image.max' => 'La imagen no debe pesar más de 2MB.',
            ]);

            // Buscar el usuario existente
            $user = Persons::findOrFail($id);

            // Actualizar los campos del usuario
            $user->name = $validatedData['name'];
            $user->surname1 = $validatedData['surname1'];
            $user->ci = $validatedData['ci'];
            $user->email = $validatedData['email'];

            // Si se proporciona una nueva contraseña, actualizarla
            if ($request->filled('password')) {
                $user->password = bcrypt($request->password);
            }

            // Manejar la imagen
            if ($request->hasFile('image')) {
                // Eliminar la imagen anterior si existe
                if ($user->image) {
                    Storage::delete($user->image);
                }

                // Subir la nueva imagen
                $path = $request->file('image')->store('images', 'public'); // Guardar en el directorio 'storage/app/public/images'
                $user->image = $path; // Guardar la ruta en la base de datos
            }
            $user->save();

            return redirect()->route('user.index')->with('message', 'Los datos se han actualizado correctamente.')
                ->with('icono', 'success');
        } catch (\Throwable $th) {

            return redirect()->route('user.index')->with('message', 'Verifique los datos e intente nuevamente. ' . $th->getMessage())
                ->with('icono', 'error');
        }
    }

    public function destroy(string $id)
    {
         // Encuentra al usuario por su ID
         $user = Persons::find($id);

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
