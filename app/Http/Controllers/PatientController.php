<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Persons;

class PatientController extends Controller
{

// Método para listar todos los pacientes
public function index()
{
    $patients = Patient::with('doctor')->get();
    return view('patients.index', compact('patients'));
}

// Método para mostrar el formulario de creación
public function create()
{
    return view('patients.create');
}

// Método para almacenar un nuevo paciente
public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'medical_history' => 'required|string|max:255',
        // 'doctor_id' => 'required|exists:doctors,id',
    ]);

    Patient::create($validatedData);
    return redirect()->route('patients.index')->with('success', 'Paciente creado exitosamente.');
}

// Método para mostrar un paciente específico
public function show($id)
{
    // $patient = Patient::with('doctor')->findOrFail($id);
    // return view('patients.show', compact('patient'));
}

// Método para mostrar el formulario de edición
public function edit($id)
{
    $patient = Patient::findOrFail($id);
    return view('patients.edit', compact('patient'));
}

// Método para actualizar un paciente
public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'doctor_id' => 'required|exists:doctors,id',
    ]);

    $patient = Patient::findOrFail($id);
    $patient->update($validatedData);
    return redirect()->route('patients.index')->with('success', 'Paciente actualizado exitosamente.');
}

// Método para eliminar un paciente
public function destroy($id)
{
    $patient = Patient::findOrFail($id);
    $patient->delete();
    return redirect()->route('patients.index')->with('success', 'Paciente eliminado exitosamente.');
}
}
