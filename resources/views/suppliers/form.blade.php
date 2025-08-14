

<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="supplier_code">Código de proveedor</label>
                <input type="text" id="supplier_code" name="supplier_code" class="form-control form-control-alternative"
                placeholder="Ingresar código de proveedor"
                value="{{ old('supplier_code', $suppliers->supplier_code) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="company">Compañía</label>
                <input type="text" id="company" name="company" class="form-control form-control-alternative"
                placeholder="Ingresar compañía del proveedor"
                value="{{ old('company', $suppliers->company) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="representative">Nombre del representante</label>
                <input type="text" id="representative" name="representative" class="form-control form-control-alternative"
                placeholder="Ingresar nombre del representante"
                value="{{ old('representative', $suppliers->representative) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Número de teléfono</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                placeholder="Ingresar número de teléfono del responsable"
                value="{{ old('telephone', $suppliers->telephone) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" class="form-control form-control-alternative"
                placeholder="Ingresar correo electrónico del proveedor"
                value="{{ old('email', $suppliers->email) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Dirección</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                placeholder="Ingresar dirección del proveedor"
                value="{{ old('address', $suppliers->address) }}">
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label  for="type_supplier_id">
                <i class="fas fa-user-graduate"> Tipo de proveedor</i> 
            </label>
            <select name="type_supplier_id" id="type_supplier_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar un Tipo de Proveedor</option>
                @foreach ($typeSuppliers as $typeSupplier)
                <option value="{{ $typeSupplier->id }}"
                    {{ old('type_supplier_id', $supplier->type_supplier_id ?? '') == $typeSupplier->id ? 'selected' : ''}}>
                    {{ $typeSupplier->type}}
                </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<hr class="my-4"/>

<h6 class="heading-small text-muted mb-4"> Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit"  class="btn btn-primary">
            <i class="fas fa-save"> Guardar Proveedor</i> 
        </button>
    </div>
</div>

