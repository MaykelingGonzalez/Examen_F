<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;  
use App\Http\Requests\SupplierRequest;
use App\Exports\SuppliersExport;
use Maatwebsite\Excel\Facades\Excel;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::latest()->paginate(10); //Los carga y ordena del último al primero que se registró
        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = new Supplier();
        return view('suppliers.create', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupplierRequest $request)
    {
        Supplier::create($request->validated());
        return redirect()->route('suppliers.index')->with('success', 'Proveedor creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $suppliers = Supplier::find($id);
        return view('suppliers.show', compact('suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $suppliers = Supplier::find($id);
        return view('suppliers.edit', compact('suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupplierRequest $request, int $id)
    {
        $suppliers = Supplier::find($id);
        $suppliers->update($request->validated());
        return redirect()->route('suppliers.index')->with('updated', 'Proveedor actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $suppliers = Supplier::find($id);
        $suppliers->delete();
        return redirect()->route('suppliers.index')->with('deleted', 'Proveedor eliminado exitosamente.');
    }

    public function export()
    {
        return Excel::download(new SuppliersExport, 'ReporteProveedores.xlsx');
    }
}
