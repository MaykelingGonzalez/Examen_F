

<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="responsible_code"><i class="fas fa-barcode"></i><b> Código de responsable</b></label>
                <input type="text" id="responsible_code" name="responsible_code" class="form-control form-control-alternative"
                placeholder="Ingresar código de responsable"
                value="{{ old('responsible_code', $responsibles->responsible_code) }}"> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name"><i class="fas fa-building"></i><b> Responsable</b></label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre del responsable"
                value="{{ old('name', $responsibles->name) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification"><i class="fas fa-user"></i><b> Cédula</b></label>
                <input type="text" id="identification" name="identification" class="form-control form-control-alternative"
                placeholder="Ingresar cédula del responsable"
                value="{{ old('identification', $responsibles->identification) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="birthdate"><i class="fas fa-phone"></i><b> Fecha de nacimiento</b></label>
                <input type="date" id="birthdate" name="birthdate" class="form-control form-control-alternative"
                placeholder="Ingresar fecha de nacimiento del responsable"
                value="{{ old('birthdate', $responsibles->birthdate) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="birthplace"><i class="fas fa-envelope"></i><b> Lugar de nacimiento</b></label>
                <input type="text" id="birthplace" name="birthplace" class="form-control form-control-alternative"
                placeholder="Ingresar lugar de nacimiento del responsable"
                value="{{ old('birthplace', $responsibles->birthplace) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age"><i class="fas fa-map-pin"></i><b> Edad</b></label>
                <input type="text" id="age" name="age" class="form-control form-control-alternative"
                placeholder="Ingresar edad del responsable"
                value="{{ old('age', $responsibles->age) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="sex"><b>Sexo</b></label>
                <select name="sex" id="sex" class = "form-control">
                    <option value="" disabled selected>Seleccione el sexo</option>
                    <option value="Femenino" {{old('sex', $responsibles->sex ?? '') == 'Femenino' ? 'selected' : ''}}>Femenino</option>
                    <option value="Masculino" {{old('sex', $responsibles->sex ?? '') == 'Masculino' ? 'selected' : ''}}>Masculino</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone"><b>Número de teléfono</b></label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                placeholder="Ingresar número de teléfono"
                value="{{ old('telephone', $responsibles->telephone ??'') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email"><b>Correo electrónico</b></label>
                <input type="email" id="email" name="email" class="form-control form-control-alternative"
                placeholder="Ingresar correo del responsable"
                value="{{ old('email', $responsibles->email ??'') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="country"><b>País</b></label>
                <select name="country" id="country" class = "form-control">
                    <option value="" disabled selected>Seleccione el país de procedencia</option>
                    <option value="Belice" {{old('country', $responsibles->country ?? '') == 'Belice' ? 'selected' : ''}}>Belice</option>
                    <option value="Costa Rica" {{old('country', $responsibles->country ?? '') == 'Costa Rica' ? 'selected' : ''}}>Costa Rica</option>
                    <option value="El Salvador" {{old('country', $responsibles->country ?? '') == 'El Salvador' ? 'selected' : ''}}>El Salvador</option>
                    <option value="Guatemala" {{old('country', $responsibles->country ?? '') == 'Guatemala' ? 'selected' : ''}}>Guatemala</option>
                    <option value="Honduras" {{old('country', $responsibles->country ?? '') == 'Honduras' ? 'selected' : ''}}>Honduras</option>
                    <option value="Nicaragua" {{old('country', $responsibles->country ?? '') == 'Nicaragua' ? 'selected' : ''}}>Nicaragua</option>
                    <option value="Panamá" {{old('country', $responsibles->country ?? '') == 'Panamá' ? 'selected' : ''}}>Panamá</option>
                </select>
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="nationality"><b>Nacionalidad</b></label>
                <select name="nationality" id="nationality" class = "form-control">
                    <option value="" disabled selected>Seleccione la nacionalidad</option>
                    <option value="Beliceño" {{old('nationality', $responsibles->nationality ?? '') == 'Beliceño' ? 'selected' : ''}}>Beliceño</option>
                    <option value="Costarricense" {{old('nationality', $responsibles->nationality ?? '') == 'Costarricense' ? 'selected' : ''}}>Costarricense</option>
                    <option value="Salvadoreño" {{old('nationality', $responsibles->nationality ?? '') == 'Salvadoreño' ? 'selected' : ''}}>Salvadoreño</option>
                    <option value="Guatemalteco" {{old('nationality', $responsibles->nationality ?? '') == 'Guatemalteco' ? 'selected' : ''}}>Guatemalteco</option>
                    <option value="Hondureño" {{old('nationality', $responsibles->nationality ?? '') == 'Hondureño' ? 'selected' : ''}}>Hondureño</option>
                    <option value="Nicaragüense" {{old('nationality', $responsibles->nationality ?? '') == 'Nicaragüense' ? 'selected' : ''}}>Nicaragüense</option>
                    <option value="Panameño" {{old('nationality', $responsibles->nationality ?? '') == 'Panameño' ? 'selected' : ''}}>Panameño</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="department"><b>Departamento</b></label>
                <input type="text" id="department" name="department" class="form-control form-control-alternative"
                placeholder="Ingresar departamento del responsable"
                value="{{ old('department', $responsibles->department) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="municipality"><b>Municipio</b></label>
                <input type="text" id="municipality" name="municipality" class="form-control form-control-alternative"
                placeholder="Ingresar municipio del responsable"
                value="{{ old('municipality', $responsibles->municipality) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address"><b>Dirección</b></label>
                <input type="note" id="address" name="address" class="form-control form-control-alternative"
                placeholder="Ingresar dirección del responsable"
                value="{{ old('address', $responsibles->address) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="marital_status"><b>Estado Civil</b></label>
                <select name="marital_status" id="marital_status" class = "form-control">
                    <option value="" disabled selected>Seleccione el estado civil</option>
                    <option value="Soltero/a" {{old('marital_status', $responsibles->marital_status ?? '') == 'Soltero/a' ? 'selected' : ''}}>Soltero/a</option>
                    <option value="Casado/a" {{old('marital_status', $responsibles->marital_status ?? '') == 'Casado/a' ? 'selected' : ''}}>Casado/a</option>
                    <option value="Viudo/a" {{old('marital_status', $responsibles->marital_status ?? '') == 'Viudo/a' ? 'selected' : ''}}>Viudo/a </option>
                    <option value="Divorciado/a" {{old('marital_status', $responsibles->marital_status ?? '') == 'Divorciado/a' ? 'selected' : ''}}>Divorciado/a </option>
                    <option value="Unión de hecho estable" {{old('marital_status', $responsibles->marital_status ?? '') == 'Unión de hecho estable' ? 'selected' : ''}}>Unión de hecho estable </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
               <label class="form-control-label" for="academic_level"><b>Nivel académico</b></label>
                <select name="academic_level" id="academic_level" class = "form-control">
                    <option value="" disabled selected>Seleccione el nivel académico</option>
                    <option value="Educación básica" {{old('academic_level', $responsibles->academic_level ?? '') == 'Educación básica' ? 'selected' : ''}}>Educación básica</option>
                    <option value="Bachiller" {{old('academic_level', $responsibles->academic_level ?? '') == 'Bachiller' ? 'selected' : ''}}>Bachiller</option>
                    <option value="Doctor" {{old('academic_level', $responsibles->academic_level ?? '') == 'Doctor' ? 'selected' : ''}}>Doctor</option>                    
                    <option value="Ingeniero" {{old('academic_level', $responsibles->academic_level ?? '') == 'Ingeniero' ? 'selected' : ''}}>Ingeniero</option>
                    <option value="Técnico" {{old('academic_level', $responsibles->academic_level ?? '') == 'Técnico' ? 'selected' : ''}}>Técnico</option>
                    <option value="Licenciado" {{old('academic_level', $responsibles->academic_level ?? '') == 'Licenciado' ? 'selected' : ''}}>Licenciado</option>
                </select>
            </div>
        </div>
    </div>

<hr class="my-4"/>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit"  class="btn btn-primary">
            <i class="fas fa-save"></i><b>Guardar Responsable</b>
        </button>
    </div>
</div>

