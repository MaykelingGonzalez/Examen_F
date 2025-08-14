<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeSupplier;  
use App\Http\Requests\TypeSupplierRequest;

class TypeSupplierController extends Controller
{
        /**
         * Display a listing of the resource.
         */
    public function index()
    {
        $typeSuppliers = TypeSupplier::latest()->paginate(10);
        return view('type_suppliers.index', compact('typeSuppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typeSuppliers = new TypeSupplier();
        return view('type_suppliers.create', compact('typeSuppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeSupplierRequest $request)
    {
        TypeSupplier::create($request->validated());
        return redirect()->route('type_suppliers.index')->with('success', 'Tipo de proveedor creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $typeSuppliers = TypeSupplier::find($id);
        return view('type_suppliers.show', compact('typeSuppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $typeSuppliers = TypeSupplier::find($id);
        return view('type_suppliers.edit', compact('typeSuppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypeSupplierRequest $request, int $id)
    {
        $typeSuppliers = TypeSupplier::find($id);
        $typeSuppliers->update($request->validated());
        return redirect()->route('type_suppliers.index')->with('updated', 'Tipo de proveedor actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $typeSuppliers = TypeSupplier::find($id);
        $typeSuppliers->delete();
        return redirect()->route('type_suppliers.index')->with('deleted', 'Tipo de proveedor eliminado exitosamente.');
    }
}
