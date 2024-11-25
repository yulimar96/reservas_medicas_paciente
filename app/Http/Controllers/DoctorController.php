<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
  // Método para listar todos los doctores
  public function index()
  {
      $doctors = Doctor::with('patients')->get();
      return view('doctors.index', compact('doctors'));
  }

  // Método para mostrar el formulario de creación
  public function create()
  {
      return view('doctors.create');
  }

  // Método para almacenar un nuevo doctor
  public function store(Request $request)
  {
      $validatedData = $request->validate([
          'name' => 'required|string|max:255',
          'specialty' => 'required|string|max:255',
      ]);

      Doctor::create($validatedData);
      return redirect()->route('doctors.index')->with('success', 'Doctor creado exitosamente.');
  }

  // Método para mostrar un doctor específico
  public function show($id)
  {
      $doctor = Doctor::with('patients')->findOrFail($id);
      return view('doctors.show', compact('doctor'));
  }

  // Método para mostrar el formulario de edición
  public function edit($id)
  {
      $doctor = Doctor::findOrFail($id);
      return view('doctors.edit', compact('doctor'));
  }

  // Método para actualizar un doctor
  public function update(Request $request, $id)
  {
      $validatedData = $request->validate([
          'name' => 'required|string|max:255',
          'specialty' => 'required|string|max:255',
      ]);

      $doctor = Doctor::findOrFail($id);
      $doctor->update($validatedData);
      return redirect()->route('doctors.index')->with('success', 'Doctor actualizado exitosamente.');
  }

  // Método para eliminar un doctor
  public function destroy($id)
  {
      $doctor = Doctor::findOrFail($id);
      $doctor->delete();
      return redirect()->route('doctors.index')->with('success', 'Doctor eliminado exitosamente.');
  }
}
