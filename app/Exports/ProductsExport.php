<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::select([
            'product_code',
            'name',
            'price',
            'description',
            'category_id',
            'measureUnit_id',
            'supplier_id'
        ])->get();
    }

    public function headings(): array
    {
        return [
            'Código de producto',
            'Nombre del producto',
            'Precio',
            'Descripción',
            'Categoría',
            'Unidad de medida',
            'Proveedor'
        ];
    }
}
