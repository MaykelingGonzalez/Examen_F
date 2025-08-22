<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="warehouse_code"> <b>Código de bodega</b></label>
                <input type="text" id="warehouse_code" name="warehouse_code" class="form-control form-control-alternative"
                placeholder="Ingresar código de bodega"
                value="{{ old('warehouse_code', $warehouses->warehouse_code) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name"><b> Bodega</b></label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre de bodega"
                value="{{ old('name', $warehouses->name) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="location"> <b>Ubicación</b></label>
                <input type="text" id="location" name="location" class="form-control form-control-alternative"
                placeholder="Ingresar ubicación de bodega"
                value="{{ old('location', $warehouses->location) }}"> 
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label  for="responsible_id">
                <i class="fas fa-user-graduate"></i><b> Responsable</b>
            </label>
            <select name="responsible_id" id="responsible_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar un Responsable</option>
                @foreach ($responsibles as $responsible)
                <option value="{{ $responsible->id }}"
                    {{ old('responsible_id', $warehouses->responsible_id ?? '') == $responsible->id ? 'selected' : ''}}>
                    {{ $responsible->name }}
                </option>
                @endforeach
            </select>
        </div>
    </div>


<hr class="my-4"/>

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit"  class="btn btn-primary">
            <i class="fas fa-save"> Guardar Bodega</i>
        </button>
    </div>
</div>

    


