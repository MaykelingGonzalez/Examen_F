<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;  
use App\Models\Responsible;
use App\Http\Requests\WarehouseRequest;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warehouses = Warehouse::with('responsible')->paginate(10);
        return view('warehouses.index', compact('warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $warehouses = new Warehouse();
        $responsibles = Responsible::all();
        return view('warehouses.create', compact('warehouses', 'responsibles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WarehouseRequest $request)
    {
        Warehouse::create($request->validated());
        return redirect()->route('warehouses.index')->with('success', 'Bodega creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
       $warehouses = Warehouse::find($id);
        $responsibles = Responsible::all();
        return view('warehouses.show', compact('warehouses', 'responsibles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $warehouses = Warehouse::find($id);
        $responsibles = Responsible::all();
        return view('warehouses.edit', compact('warehouses', 'responsibles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WarehouseRequest $request, int $id)
    {
        $warehouses = Warehouse::find($id);
        $warehouses->update($request->validated());
        return redirect()->route('warehouses.index')->with('updated', 'Bodega actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $warehouses = Warehouse::find($id);
        $warehouses->delete();
        return redirect()->route('warehouses.index')->with('deleted', 'Bodega eliminada exitosamente.');
    }
}
