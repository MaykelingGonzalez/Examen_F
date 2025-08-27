<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="current_quantity"><i class="fas fa-arrow-right"></i> <b>Cantidad actual</b></label>
                <input type="text" id="current_quantity" name="current_quantity" class="form-control form-control-alternative"
                placeholder="Ingresar cantidad actual"
                value="{{ old('current_quantity', $inventories->current_quantity) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="minimum_quantity"><i class="fas fa-arrow-down"></i> <b> Cantidad mínima</b></label>
                <input type="text" id="minimum_quantity" name="minimum_quantity" class="form-control form-control-alternative"
                placeholder="Ingresar cantidad mínima"
                value="{{ old('minimum_quantity', $inventories->minimum_quantity) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="maximum_quantity"> <i class="fas fa-arrow-up"></i><b> Cantidad máxima</b></label>
                <input type="text" id="maximum_quantity" name="maximum_quantity" class="form-control form-control-alternative"
                placeholder="Ingresar cantidad máxima"
                value="{{ old('maximum_quantity', $inventories->maximum_quantity) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description"><i class="fas fa-comment"></i> <b>Descripción</b></label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Ingresar descripción de producto"
                value="{{ old('description', $inventories->description) }}"> 
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label  for="product_id">
                <i class="fas fa-box"></i><b> Producto</b>
            </label>
            <select name="product_id" id="product_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar un Producto</option>
                @foreach ($products as $product)
                <option value="{{ $product->id }}"
                    {{ old('product_id', $inventories->product_id ?? '') == $product->id ? 'selected' : ''}}>
                    {{ $product->name }}
                </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label  for="warehouse_id">
                <i class="fas fa-boxes"></i><b> Bodega</b>
            </label>
            <select name="warehouse_id" id="warehouse_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar una Bodega</option>
                @foreach ($warehouses as $warehouse)
                <option value="{{ $warehouse->id }}"
                    {{ old('warehouse_id', $inventories->warehouse_id ?? '') == $warehouse->id ? 'selected' : ''}}>
                    {{ $warehouse->name }}
                </option>
                @endforeach
            </select>
        </div>
    </div>
    
    
<hr class="my-4"/>


<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit"  class="btn btn-primary">
            <i class="fas fa-save"> Guardar Inventario</i>
        </button>
    </div>
</div>

    

