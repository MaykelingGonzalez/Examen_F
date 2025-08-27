 <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name"><i class="fas fa-weight-hanging"></i><b> Unidad de medida</b></label>
                <select name="name" id="name" class="form-control form-control-alternative">
                    <option value="" disabled selected>Seleccione la unidad de medida</option>
                    <option value="Metro" {{ old('name', $measureUnits->name) == 'Metro' ? 'selected' : '' }}>Metro</option>
                    <option value="Kilogramo" {{ old('name', $measureUnits->name) == 'Kilogramo' ? 'selected' : '' }}>Kilogramo</option>
                    <option value="Metro cuadrado" {{ old('name', $measureUnits->name) == 'Metro cuadrado' ? 'selected' : '' }}>Metro cuadrado</option>
                    <option value="Metro cúbico" {{ old('name', $measureUnits->name) == 'Metro cúbico' ? 'selected' : '' }}>Metro cúbico</option>
                    <option value="Libra" {{ old('name', $measureUnits->name) == 'Libra' ? 'selected' : '' }}>Libra</option>
                    <option value="Unidad" {{ old('name', $measureUnits->name) == 'Unidad' ? 'selected' : '' }}>Unidad</option>
                </select>
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="symbol"><i class="fas fa-ruler"></i><b> Símbolo</b></label>
                <select name="symbol" id="symbol" class="form-control form-control-alternative">
                    <option value="" disabled selected>Seleccione el símbolo de la unidad de medida</option>
                    <option value="m" {{ old('symbol', $measureUnits->symbol) == 'm' ? 'selected' : '' }}>m</option>
                    <option value="kg" {{ old('symbol', $measureUnits->symbol) == 'kg' ? 'selected' : '' }}>kg</option>
                    <option value="m²" {{ old('symbol', $measureUnits->symbol) == 'm²' ? 'selected' : '' }}>m²</option>
                    <option value="m³" {{ old('symbol', $measureUnits->symbol) == 'm³' ? 'selected' : '' }}>m³</option>
                    <option value="lb" {{ old('symbol', $measureUnits->symbol) == 'lb' ? 'selected' : '' }}>lb</option>
                    <option value="ud" {{ old('symbol', $measureUnits->symbol) == 'ud' ? 'selected' : '' }}>ud</option>
                </select>
            </div>
        </div>
    </div>


<hr class="my-4"/>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit"  class="btn btn-primary">
            <i class="fas fa-save"></i><b>Guardar Unidad de Medida</b>
        </button>
    </div>
</div>

