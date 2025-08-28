<div class="pl-lg-4">
    <div class="row">
        <div class="col-8">
            <div class="form-group">
                <label class="form-control-label" for="quantity"><i class="fas fa-exchange-alt"></i> Cantidad de movimientos</label>
                <input type="text" id="quantity" name="quantity" class="form-control form-control-alternative"
                placeholder="Ingresar cantidad de movimientos"
                value="{{ old('quantity', $movements->quantity) }}"> 
            </div>
        </div>

    <div class="col-8">
        <div class="form-group">
            <label  for="type_movement_id">
                <i class="fas fa-exchange-alt"> Tipo de movimiento</i> 
            </label>
            <select name="type_movement_id" id="type_movement_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar un tipo de movimiento</option>
                @foreach ($type_movements as $type_movement)
                <option value="{{ $type_movement->id }}"
                    {{ old('type_movement_id', $movements->type_movement_id ?? '') == $type_movement->id ? 'selected' : ''}}>
                    {{ $type_movement->type_movement }}
                </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-8">
        <div class="form-group">
            <label  for="product_id">
                <i class="fas fa-box"> Producto</i> 
            </label>
            <select name="product_id" id="product_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar un producto</option>
                @foreach ($products as $product)
                <option value="{{ $product->id }}"
                    {{ old('product_id', $movement->product_id ?? '') == $product->id ? 'selected' : ''}}>
                    {{ $product->name }}
                </option>
                @endforeach
            </select>
        </div>
    </div>  

        <div class="col-8">
            <div class="form-group">
                <label class="form-control-label" for="observations"> <i class="fas fa-comment-dots"></i> Observaciones</label>
                <input type="text" id="observations" name="observations" class="form-control form-control-alternative"
                placeholder="Ingresar observaciones"
                value="{{ old('observations', $movements->observations) }}"> 
            </div>
        </div>
    
    <div class="col-8">
        <div class="form-group">
            <label  for="user_id">
                <i class="fas fa-user"> Usuario</i> 
            </label>
            <select name="user_id" id="user_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar un usuario</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}"
                    {{ old('user_id', $movement->user_id ?? '') == $user->id ? 'selected' : ''}}>
                    {{ $user->name }}
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
            <i class="fas fa-save"> Guardar Movimiento</i>
        </button>
    </div>
</div>

    

