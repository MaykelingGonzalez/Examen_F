<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="product_code"><i class="fas fa-barcode"></i> <b>Código de producto</b></label>
                <input type="text" id="product_code" name="product_code" class="form-control form-control-alternative"
                placeholder="Ingresar código de producto"
                value="{{ old('product_code', $products->product_code) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name"><i class="fas fa-box"></i><b> Producto</b></label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre de producto"
                value="{{ old('name', $products->name) }}"> 
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label  for="measureUnit_id">
                <i class="fas fa-ruler"></i><b> Unidad de medida</b>
            </label>
            <select name="measureUnit_id" id="measureUnit_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar una Unidad de medida</option>
                @foreach ($measureUnits as $measureUnit)
                <option value="{{ $measureUnit->id }}"
                    {{ old('measureUnit_id', $product->measureUnit_id ?? '') == $measureUnit->id ? 'selected' : ''}}>
                    {{ $measureUnit->symbol }}
                </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="price"><i class="fas fa-money-bill"></i><b> Precio unitario</b></label>
                <input type="text" id="price" name="price" class="form-control form-control-alternative"
                placeholder="Ingresar precio de producto"
                value="{{ old('price', $products->price) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description"><i class="fas fa-pen"></i><b> Descripción</b></label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Ingresar descripción de producto"
                value="{{ old('description', $products->description) }}"> 
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label  for="category_id">
                <i class="fas fa-tags"></i><b> Categoría</b>
            </label>
            <select name="category_id" id="category_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar una Categoría</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : ''}}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>
    </div>

       
    <div class="col-lg-6">
        <div class="form-group">
            <label  for="supplier_id">
                <i class="fas fa-boxes"></i><b> Proveedor</b>
            </label>
            <select name="supplier_id" id="supplier_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar un proveedor</option>
                @foreach ($suppliers as $supplier)
                <option value="{{ $supplier->id }}"
                    {{ old('supplier_id', $product->supplier_id ?? '') == $supplier->id ? 'selected' : ''}}>
                    {{ $supplier->company }}
                </option>
                @endforeach
            </select>
        </div>
    </div>
</div>


<hr class="my-4"/>


<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit"  class="btn btn-primary">
            <i class="fas fa-save"> Guardar Producto</i>
        </button>
    </div>
</div>

    

