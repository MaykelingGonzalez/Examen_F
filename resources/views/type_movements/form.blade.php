

<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_movement_code"><i class="fas fa-barcode"></i><b> Código de tipo de movimiento</b></label>
                <input type="text" id="type_movement_code" name="type_movement_code" class="form-control form-control-alternative"
                placeholder="Ingresar código de tipo de movimiento"
                value="{{ old('type_movement_code', $typeMovements->type_movement_code) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_movement"><i class="fas fa-exchange-alt"></i><b> Tipo de movimiento</b></label>
                <input type="text" id="type_movement" name="type_movement" class="form-control form-control-alternative"
                placeholder="Ingresar tipo de movimiento"
                value="{{ old('type_movement', $typeMovements->type_movement) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description"><i class="fas fa-pen"></i><b> Descripción</b></label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Ingresar descripción"
                value="{{ old('description', $typeMovements->description) }}">
            </div>
        </div>
    </div>

<hr class="my-4"/>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit"  class="btn btn-primary">
            <i class="fas fa-save"></i><b>Guardar Tipo de Movimiento</b>
        </button>
    </div>
</div>

