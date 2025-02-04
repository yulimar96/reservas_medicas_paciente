<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\FederalStates;
use App\Models\Municipality;
use App\Models\Parishes;
use App\Models\City;
use App\Models\PhoneAreaCode;
use App\Models\CellPhoneAreaCode;
use App\Models\Organizational_unit_types;
use App\Models\Employee_contract_types;
use App\Models\EmployeePositions;


class UserController extends Controller
{

    public function index()
    {
        $phones = PhoneAreaCode::all();
        $cellphone = CellPhoneAreaCode::all();
        $federalstates = FederalStates::all();
        $municipality = Municipality::all();
        $parishes = Parishes::all();
        $city = City::all();
        $users = User::with('person')->where('active', true)->get();
        $roles = Role::all();
        foreach ($users as $user) { //debo optimizar
            $user->roles = $user->getRoleNames(); // Agregar roles a cada usuario
            $user->full_name = trim($user->person->name_1 . ' ' . $user->person->name_2 . ' ' . $user->person->surname_1 . ' ' . $user->person->surname_2);
        }
        $roleColors = [
           'Admin' => 'badge-admin',
           'Secretaria' => 'badge-secretaria',
           'Doctor' => 'badge-doctor',
           'Patient' => 'badge-patient',
        ];

       return view('pages.user.index', compact('roleColors','users','roles', 'phones', 'cellphone','federalstates','municipality','parishes','city'));

    }
    public function getMunicipalities($stateId)
    {
        $municipalities = Municipality::where('federals_state_id', $stateId)->get();
        return response()->json($municipalities);
    }

    public function getCities($stateId)
    {
        $cities = City::where('federals_state_id', $stateId)->get();
        return response()->json($cities);
    }

    public function getParishes($municipalityId)
    {
        $parishes = Parishes::where('municipality_id', $municipalityId)->get();
        return response()->json($parishes);
    }
    public function store(Request $request)
    {
        try {
            // Validar los datos de entrada
            $validatedData = $request->validate([
                // Validación para la tabla Person
                'name_user' => 'required|string|max:20|regex:/^[a-zA-Z]+$/',
                'name_1' => 'required|string|max:20|regex:/^[a-zA-Z]+$/',
                'name_2' => 'nullable|string|max:20|regex:/^[a-zA-Z]+$/',
                'surname_1' => 'required|string|max:20|regex:/^[a-zA-Z]+$/',
                'surname_2' => 'nullable|string|max:20|regex:/^[a-zA-Z]+$/',
                'nationality' => 'required|boolean',
                'identity_number' => 'required|string|max:9|unique:persons,identity_number|regex:/^[0-9]+$/',
                'sex' => 'required|boolean',
                'birth_date' => 'nullable|date',
                'phone_number' => 'required|string|max:20|regex:/^(?!000)[0-9]+$/',
                'cellphone_number' => 'required|string|max:20|regex:/^(?!000)[0-9]+$/',
                'potition_id' => 'nullable|exists:potitions,id',
                'organizational_unit_types_id' => 'nullable|exists:organizational_unit_types,id',
                'employee_contract_types_id' => 'nullable|exists:employee_contract_types,id',

                // Validación para la tabla User
                'name_user' => 'required|string|max:20|regex:/^[a-zA-Z]+$/',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|min:6',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'role_id' => 'required|exists:roles,id', // Validación para el rol
            ]);

            // Crear la entrada en la tabla persons
            $person = Person::create([
                'name_1' => $validatedData['name_1'],
                'name_2' => $validatedData['name_2'],
                'surname_1' => $validatedData['surname_1'],
                'surname_2' => $validatedData['surname_2'],
                'nationality' => $validatedData['nationality'],
                'identity_number' => $validatedData['identity_number'],
                'sex' => $validatedData['sex'],
                'birth_date' => $validatedData['birth_date'],
                'potition_id' => $validatedData['potition_id'],
                'organizational_unit_types_id' => $validatedData['organizational_unit_types_id'],
                'employee_contract_types_id' => $validatedData['employee_contract_types_id'],
            ]);

            // Crear un nuevo usuario
            $user = User::create([
                'name_user' => $validatedData['name_user'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
                'persons_id' => $person->id // Relacionar con la tabla persons
            ]);

            // Manejar la imagen
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('images', 'public');
                $user->image = $path;
            }

            // Asignar rol
            $user->assignRole($validatedData['role_id']); // Asigna el rol al usuario

            // Guardar datos específicos según el rol
            if ($validatedData['role_id'] == 'doctor') { // Reemplaza con el ID real del rol de doctor
                $doctorData = $request->validate([
                    'medical_license' => 'required|string|max:20|unique:doctors,medical_license',
                    'specialtys_id' => 'required|exists:medical_specialities,id',
                ]);

                Doctor::create([
                    'medical_license' => $doctorData['medical_license'],
                    'person_id' => $person->id,
                    'specialtys_id' => $doctorData['specialtys_id'],
                    'employee_contract_types_id' => $validatedData['employee_contract_types_id'],
                    'potition_id' => $validatedData['potition_id'],
                    'organizational_unit_types_id' => $validatedData['organizational_unit_types_id'],
                ]);
            } elseif ($validatedData['role_id'] == 'secretaria') { // Reemplaza con el ID real del rol de secretaria
                Secretaria::create([
                    'persons_id' => $person->id,
                ]);
            } elseif ($validatedData['role_id'] == 'patient') { // Reemplaza con el ID real del rol de paciente
                $patientData = $request->validate([
                    'medical_history' => 'nullable|string|max:100',
                ]);

                Patient::create([
                    'person_id' => $person->id,
                    'medical_history' => $patientData['medical_history'],
                ]);
            }

            // Redirigir con un mensaje de éxito
            return redirect()->route('user.index')->with('message', 'El usuario se ha creado correctamente.')
                ->with('icono', 'success');
        } catch (\Throwable $th) {
            // Manejo de errores
            return redirect()->route('user.index')->with('message', 'Verifique los datos e intente nuevamente. ' . $th->getMessage())
                ->with('icono', 'error');
        }
    }
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $user = User::find($id);
    return response()->json($user);
    }

    public function update(Request $request, string $id)
{
    try {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            // Validación para la tabla Person
            'name_1' => 'required|string|max:20|regex:/^[a-zA-Z]+$/',
            'name_2' => 'nullable|string|max:20|regex:/^[a-zA-Z]+$/',
            'surname_1' => 'required|string|max:20|regex:/^[a-zA-Z]+$/',
            'surname_2' => 'nullable|string|max:20|regex:/^[a-zA-Z]+$/',
            'nationality' => 'required|boolean',
            'identity_number' => 'required|string|max:9|regex:/^[0-9]+$/|unique:persons,identity_number,' . $id,
            'sex' => 'required|boolean',
            'birth_date' => 'nullable|date',
            'phone_number' => 'required|string|max:20|regex:/^(?!000)[0-9]+$/',
            'cellphone_number' => 'required|string|max:20|regex:/^(?!000)[0-9]+$/',
            'potition_id' => 'required|exists:potitions,id',
            'organizational_unit_types_id' => 'required|exists:organizational_unit_types,id',
            'employee_contract_types_id' => 'required|exists:employee_contract_types,id',

            // Validación para la tabla User
            'name_user' => 'required|string|max:20|regex:/^[a-zA-Z]+$/',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|min:6', // La contraseña es opcional en la actualización
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'role_id' => 'required|exists:roles,id', // Validación para el rol
        ]);

        $homephone->phone_area->code;

        // Buscar la entrada de Person
        $person = Person::findOrFail($id);
        $person->name_1 = $validatedData['name_1'];
        $person->name_2 = $validatedData['name_2'];
        $person->surname_1 = $validatedData['surname_1'];
        $person->surname_2 = $validatedData['surname_2'];
        $person->nacionality = $validatedData['identity_number'];
        $person->identity_number = $validatedData['identity_number'];
        $person->nationality = $request->input('nationality');
        $person->sex = $validatedData['sex'];

        $person->birth_date = $validatedData['birth_date'];
        $phone_area->request->phone_area;
        $phone_home->$phone_area. $validatedData['phone_number'];
        $person->potition_id = $validatedData['potition_id'];
        $person->organizational_unit_types_id = $validatedData['organizational_unit_types_id'];
        $person->employee_contract_types_id = $validatedData['employee_contract_types_id'];
        $person->save();

        // Buscar la entrada de User
        $user = User::where('persons_id', $person->id)->firstOrFail();
        $user->name_user = $validatedData['name_user']; // O el campo que desees usar
        $user->email = $validatedData['email'];

        // Actualizar la contraseña solo si se proporciona
        if ($validatedData['password']) {
            $user->password = bcrypt($validatedData['password']);
        }

        // Manejar la imagen
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $user->image = $path;
        }

        // Guardar el usuario actualizado
        $user->save();

        // Sincronizar roles
        $user->syncRoles([$validatedData['role_id']]); // Sincroniza el rol

        // Redirigir con un mensaje de éxito
        return redirect()->route('user.index')->with('message', 'El usuario se ha actualizado correctamente.')
            ->with('icono', 'success');
    } catch (\Throwable $th) {
            // Manejo de errores
            return redirect()->route('user.index')->with('message', 'Verifique los datos e intente nuevamente. ' . $th->getMessage())
                ->with('icono', 'error');
        }
    }


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