<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;  
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\MeasureUnit;
use App\Models\Supplier;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Obtener categorías y proveedores para los select
        $categories = Category::all();
        $suppliers = Supplier::all();

        // Consulta base con relaciones
        $query = Product::with('category', 'measureUnit', 'supplier');

        // Filtrar por categoría
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        // Filtrar por proveedor
        if ($request->filled('supplier')) {
            $query->where('supplier_id', $request->supplier);
        }

        // Paginación
        $products = $query->orderBy('name')->paginate(10)->withQueryString();

        return view('products.index', compact('products', 'categories', 'suppliers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = new Product();
        $categories = Category::all();
        $measureUnits = MeasureUnit::all();
        $suppliers = Supplier::all();
        return view('products.create', compact('products', 'categories', 'measureUnits', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        Product::create($request->validated());
        return redirect()->route('products.index')->with('success', 'Producto creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $products = Product::find($id);
        $categories = Category::all();
        $measureUnits = MeasureUnit::all();
        $suppliers = Supplier::all();
        return view('products.show', compact('products', 'categories', 'measureUnits', 'suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $products = Product::find($id);
        $categories = Category::all();
        $measureUnits = MeasureUnit::all();
        $suppliers = Supplier::all();
        return view('products.edit', compact('products', 'categories', 'measureUnits', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, int $id)
    {
        $products = Product::find($id);
        $products->update($request->validated());
        return redirect()->route('products.index')->with('updated', 'Producto actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->route('products.index')->with('deleted', 'Producto eliminado exitosamente.');
    }

    public function export()
    {
        return Excel::download(new ProductsExport, 'ReporteProductos.xlsx');
    }
}
