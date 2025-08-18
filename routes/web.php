<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TypeMovementController;
use App\Http\Controllers\MeasureUnitController;
use App\Exports\SuppliersExport;
use Maatwebsite\Excel\Facades\Excel;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::resource('/suppliers', SupplierController::class);
    Route::get('/suppliers/export/excel', function () {
        return Excel::download(new SuppliersExport, 'ReporteProveedores.xlsx');
    })->name('suppliers.export.excel');

    Route::resource('/type_movements', TypeMovementController::class);

    Route::resource('/measure_units', MeasureUnitController::class);

});

require __DIR__ . '/auth.php';
