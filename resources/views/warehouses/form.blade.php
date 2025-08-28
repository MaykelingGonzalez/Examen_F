<div class="pl-lg-4">
    <div class="row">
        <div class="col-8">
            <div class="form-group">
                <label class="form-control-label" for="warehouse_code"> <i class="fas fa-barcode"></i> <b>Código de bodega</b></label>
                <input type="text" id="warehouse_code" name="warehouse_code" class="form-control form-control-alternative"
                placeholder="Ingresar código de bodega"
                value="{{ old('warehouse_code', $warehouses->warehouse_code) }}"> 
            </div>
        </div>

        <div class="col-8">
            <div class="form-group">
                <label class="form-control-label" for="name"><i class="fas fa-warehouse"></i><b> Bodega</b></label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre de bodega"
                value="{{ old('name', $warehouses->name) }}"> 
            </div>
        </div>

        <div class="col-8">
            <div class="form-group">
                <label class="form-control-label" for="location"><i class="fas fa-map-pin"></i><b> Ubicación</b></label>
                <input type="text" id="location" name="location" class="form-control form-control-alternative"
                placeholder="Ingresar ubicación de bodega"
                value="{{ old('location', $warehouses->location) }}"> 
            </div>
        </div>

    <div class="col-8">
        <div class="form-group">
            <label  for="responsible_id">
                <i class="fas fa-user"></i><b> Responsable</b>
            </label>
            <select name="responsible_id" id="responsible_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar un responsable de bodega</option>
                @foreach ($responsibles as $responsible)
                <option value="{{ $responsible->id }}"
                    {{ old('responsible_id', $warehouses->responsible_id ?? '') == $responsible->id ? 'selected' : ''}}>
                    {{ $responsible->name }}
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
            <i class="fas fa-save"> </i> <b>Guardar Bodega</b>
        </button>
    </div>
</div>

    


