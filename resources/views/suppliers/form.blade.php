

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
                <label class="form-control-label" for="supplier_type">Tipo de proveedor</label>
                <select name="supplier_type" id="supplier_type" class="form-control form-control-alternative">
                    <option value="" disabled selected>Seleccione el tipo de proveedor</option>
                    <option value="Mayorista" {{ old('supplier_type', $suppliers->supplier_type) == 'Mayorista' ? 'selected' : '' }}>Mayorista</option>
                    <option value="Minorista" {{ old('supplier_type', $suppliers->supplier_type) == 'Minorista' ? 'selected' : '' }}>Minorista</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="company">Empresa</label>
                <input type="text" id="company" name="company" class="form-control form-control-alternative"
                placeholder="Ingresar empresa del proveedor"
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

<hr class="my-4"/>

<h6 class="heading-small text-muted mb-4"> Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit"  class="btn btn-primary">
            <i class="fas fa-save"> Guardar Proveedor</i> 
        </button>
    </div>
</div>

