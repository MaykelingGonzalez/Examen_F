<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MeasureUnit;  
use App\Http\Requests\MeasureUnitRequest;

class MeasureUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $measureUnits = MeasureUnit::latest()->paginate(10);
        return view('measure_units.index', compact('measureUnits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $measureUnits = new MeasureUnit();
        return view('measure_units.create', compact('measureUnits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MeasureUnitRequest $request)
    {
        MeasureUnit::create($request->validated());
        return redirect()->route('measure_units.index')->with('success', 'Unidad de medida creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $measureUnits = MeasureUnit::find($id);
        return view('measure_units.show', compact('measureUnits'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $measureUnits = MeasureUnit::find($id);
        return view('measure_units.edit', compact('measureUnits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MeasureUnitRequest $request, int $id)
    {
        $measureUnits = MeasureUnit::find($id);
        $measureUnits->update($request->validated());
        return redirect()->route('measure_units.index')->with('updated', 'Unidad de medida actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $measureUnits = MeasureUnit::find($id);
        $measureUnits->delete();
        return redirect()->route('measure_units.index')->with('deleted', 'Unidad de medida eliminada exitosamente.');
    }
}
