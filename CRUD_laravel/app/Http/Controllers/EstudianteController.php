<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    //

    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.create');
    }

    public function store(Request $request)
    {
        // Valida y guarda el estudiante en la base de datos
    }

    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.show', compact('estudiante'));
    }

    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.edit', compact('estudiante'));
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        // Valida y actualiza el estudiante en la base de datos
    }

    public function destroy(Estudiante $estudiante)
    {
        // Elimina el estudiante de la base de datos
    }



}
