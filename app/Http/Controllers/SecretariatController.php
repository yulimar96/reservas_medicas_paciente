<?php

namespace App\Http\Controllers;

use App\Models\Secretariat;
use Illuminate\Http\Request;

class SecretariatController extends Controller
{
    public function index()
    {
        $secretariats = Secretariat::with('person')->get();
        return view('pages.secretariat.index', compact('secretariats'));
    }

    // Método para mostrar el formulario de creación
    public function create()
    {
        return view('secretariats.create');
    }

    // Método para almacenar una nueva secretaría
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_person' => 'required|exists:persons,id',
            // Otros campos de validación según tus requisitos
        ]);

        Secretariat::create($validatedData);
        return redirect()->route('secretariats.index')->with('success', 'Secretaría creada exitosamente.');
    }

    // Método para mostrar una secretaría específica
    public function show($id)
    {
        $secretariat = Secretariat::with('person')->findOrFail($id);
        return view('secretariats.show', compact('secretariat'));
    }

    // Método para mostrar el formulario de edición
    public function edit($id)
    {
        $secretariat = Secretariat::findOrFail($id);
        return view('secretariats.edit', compact('secretariat'));
    }

    // Método para actualizar una secretaría
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_person' => 'required|exists:persons,id',
            // Otros campos de validación según tus requisitos
        ]);

        $secretariat = Secretariat::findOrFail($id);
        $secretariat->update($validatedData);
        return redirect()->route('secretariats.index')->with('success', 'Secretaría actualizada exitosamente.');
    }

    // Método para eliminar una secretaría
    public function destroy($id)
    {
        $secretariat = Secretariat::findOrFail($id);
        $secretariat->delete();
        return redirect()->route('secretariats.index')->with('success', 'Secretaría eliminada exitosamente.');
    }
}