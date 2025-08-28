<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movement;  
use App\Http\Requests\MovementRequest;
use App\Models\TypeMovement;
use App\Models\Product;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::all(); // Para seleccionarproductos

        $query = Movement::with(['typeMovement', 'product', 'user']);

        // Filtrar por mes y año de creación
        if ($request->filled('created_month')) {
            [$year, $month] = explode('-', $request->created_month);
            $query->whereYear('created_at', $year)
                ->whereMonth('created_at', $month);
        }

        // Filtrar por mes y año de actualización
        if ($request->filled('updated_month')) {
            [$year, $month] = explode('-', $request->updated_month);
            $query->whereYear('updated_at', $year)
                ->whereMonth('updated_at', $month);
        }

        // Filtrar por tipo de movimiento (Entrada / Salida)
        if ($request->filled('type_movement')) {
            $query->whereHas('typeMovement', function($q) use ($request) {
                $q->where('type_movement', $request->type_movement);
            });
        }

        // Filtrar por producto
        if ($request->filled('product')) {
            $query->where('product_id', $request->product);
        }

        $movements = $query->orderBy('created_at', 'desc')->paginate(10)->withQueryString();

        return view('movements.index', compact('movements', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movements = new Movement();
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
        $movements = Movement::find($id);
        $type_movements = TypeMovement::all();
        $products = Product::all();
        $users = User::all();
        return view('movements.show', compact('movements', 'type_movements', 'products', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $movements = Movement::find($id);
        $type_movements = TypeMovement::all();
        $products = Product::all();
        $users = User::all();
        return view('movements.edit', compact('movements', 'type_movements', 'products', 'users'));
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

    public function export()
    {
        $movements = Movement::with('user')->get();
        return Excel::download(new MovementsExport, 'ReporteMovimientos.xlsx');
    }
}
