<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="product_code">Código de producto</label>
                <input type="text" id="product_code" name="product_code" class="form-control form-control-alternative"
                placeholder="Ingresar código de producto"
                value="{{ old('product_code', $products->product_code) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Producto</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre del producto"
                value="{{ old('name', $products->name) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="price">Precio</label>
                <input type="text" id="price" name="price" class="form-control form-control-alternative"
                placeholder="Ingresar precio del producto"
                value="{{ old('price', $products->price) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Ingresar descripción del producto"
                value="{{ old('description', $products->description) }}"> 
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label  for="category_id">
                <i class="fas fa-user-graduate"> Categoría</i> 
            </label>
            <select name="category_id" id="category_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar una categoría</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ old('category_id', $products->category_id ?? '') == $category->id ? 'selected' : ''}}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label  for="measureUnit_id">
                <i class="fas fa-user-graduate"> Unidad de medida</i> 
            </label>
            <select name="measureUnit_id" id="measureUnit_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar una unidad de medida</option>
                @foreach ($measureUnits as $measureUnit)
                <option value="{{ $measureUnit->id }}"
                    {{ old('measureUnit_id', $products->measureUnit_id ?? '') == $measureUnit->id ? 'selected' : ''}}>
                    {{ $measureUnit->name }}
                </option>
                @endforeach
            </select>
        </div>
    </div>             
</div>


<hr class="my-4"/>

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit"  class="btn btn-primary">
            <i class="fas fa-save"> Guardar Producto</i>
        </button>
    </div>
</div>

    
