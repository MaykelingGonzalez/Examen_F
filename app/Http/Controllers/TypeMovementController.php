<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeMovement;  
use App\Http\Requests\TypeMovementRequest;

class TypeMovementController extends Controller
{

    public function index()
    {
        $typeMovements = TypeMovement::latest()->paginate(10); //Los carga y ordena del último al primero que se registró
        return view('type_movements.index', compact('typeMovements')); //Retorna en la vista y van en plural que se llama en las vistas
    }

    public function create()
    {
        $typeMovements = new TypeMovement(); //Crea la var nueva que carga al modelo
        return view('type_movements.create', compact('typeMovements')); //Retorna la vista de creación
    }

    public function store(TypeMovementRequest $request) 
    {
       TypeMovement::create($request->validated());
       return redirect()->route('type_movements.index')->with('success', 'Tipo de movimiento creado exitosamente.');
    }

    public function show(int $id)
    {
        $typeMovements = TypeMovement::find($id);
        return view('type_movements.show', compact('typeMovements'));
    }

    public function edit(int $id)
    {
        $typeMovements = TypeMovement::find($id);
        return view('type_movements.edit', compact('typeMovements'));
    }

    public function update(TypeMovementRequest $request, int $id)
    {
        $typeMovements = TypeMovement::find($id);
        $typeMovements->update($request->validated());
        return redirect()->route('type_movements.index')->with('updated', 'Tipo de movimiento actualizado exitosamente.');  
    }

    public function destroy(int $id)
    {
        $typeMovements = TypeMovement::find($id);
        $typeMovements->delete();
        return redirect()->route('type_movements.index')->with('deleted', 'Tipo de movimiento eliminado exitosamente.');
    }
}
