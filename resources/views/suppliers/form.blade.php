

<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="supplier_code"><i class="fas fa-barcode"></i><b> Código de proveedor</b></label>
                <input type="text" id="supplier_code" name="supplier_code" class="form-control form-control-alternative"
                placeholder="Ingresar código de proveedor"
                value="{{ old('supplier_code', $suppliers->supplier_code) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="supplier_type"><i class="fas fa-user"></i><b> Tipo de proveedor</b></label>
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
                <label class="form-control-label" for="company"><i class="fas fa-building"></i><b> Empresa</b></label>
                <input type="text" id="company" name="company" class="form-control form-control-alternative"
                placeholder="Ingresar empresa del proveedor"
                value="{{ old('company', $suppliers->company) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="representative"><i class="fas fa-user"></i><b> Nombre del representante</b></label>
                <input type="text" id="representative" name="representative" class="form-control form-control-alternative"
                placeholder="Ingresar nombre del representante"
                value="{{ old('representative', $suppliers->representative) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone"><i class="fas fa-phone"></i><b> Número de teléfono</b></label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                placeholder="Ingresar número de teléfono del responsable"
                value="{{ old('telephone', $suppliers->telephone) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email"><i class="fas fa-envelope"></i><b> Correo electrónico</b></label>
                <input type="email" id="email" name="email" class="form-control form-control-alternative"
                placeholder="Ingresar correo electrónico del proveedor"
                value="{{ old('email', $suppliers->email) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address"><i class="fas fa-map-pin"></i><b> Dirección</b></label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                placeholder="Ingresar dirección del proveedor"
                value="{{ old('address', $suppliers->address) }}">
            </div>
        </div>
    </div>

<hr class="my-4"/>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit"  class="btn btn-primary">
            <i class="fas fa-save"></i><b>Guardar Proveedor</b>
        </button>
    </div>
</div>

