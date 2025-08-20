<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movement;  
use App\Http\Requests\MovementRequest;
use App\Models\TypeMovement;
use App\Models\Product;
use App\Models\User;

class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movements = Movement::with('type_movement', 'product', 'user')->paginate(10);
        return view('movements.index', compact('movements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movements = Movement();
        $type_movements = TypeMovement::all();
        $products = Product::all();
        $users = User::all();
        return view('movements.create', compact('movements', 'type_movements', 'products', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovementRequest $request)
    {
        Movement::create($request->validated());
        return redirect()->route('movements.index')->with('success', 'Movimiento creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $movements = Movement();
        $type_movements = TypeMovement::all();
        $products = Product::all();
        $users = User::all();
        return view('movements.create', compact('movements', 'type_movements', 'products', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $movements = Movement();
        $type_movements = TypeMovement::all();
        $products = Product::all();
        $users = User::all();
        return view('movements.create', compact('movements', 'type_movements', 'products', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovementRequest $request, int $id)
    {
        $movements = Movement::find($id);
        $movements->update($request->validated());
        return redirect()->route('movements.index')->with('updated', 'Movimiento actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $movements = Movement::find($id);
        $movements->delete();
        return redirect()->route('movements.index')->with('deleted', 'Movimiento eliminado exitosamente.');
    }
}
