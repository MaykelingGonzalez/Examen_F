
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type">Tipo de Proveedor</label>
                <select name="type" id="type" class = "form-control">
                    <option value="" disabled selected>Seleccione el tipo de proveedor</option>
                    <option value="Mayorisata" {{old('type', $type_suppliers->type ?? '') == 'Mayorisata' ? 'selected' : ''}}>Mayorisata</option>
                    <option value="Minorista" {{old('type', $type_suppliers->type ?? '') == 'Minorista' ? 'selected' : ''}}>Minorista</option>
                    <option value="Fabricante" {{old('type', $type_suppliers->type ?? '') == 'Fabricante' ? 'selected' : ''}}>Fabricante</option>
                    <option value="Nacionales" {{old('type', $type_suppliers->type ?? '') == 'Nacionales' ? 'selected' : ''}}>Nacionales</option>                
                    <option value="Internacionales" {{old('type', $type_suppliers->type ?? '') == 'Internacionales' ? 'selected' : ''}}>Internacionales</option>                   
                </select>
            </div>
        </div>
    </div>

</div>

<hr class="my-4"/>

<h6 class="heading-small text-muted mb-4"> Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit"  class="btn btn-primary">
            <i class="fas fa-save"> Guardar Tipo de Proveedor</i>
        </button>
    </div>
</div>

