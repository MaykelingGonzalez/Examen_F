 <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name"><i class="fas fa-tags"></i><b> Categoría</b></label>
                <select name="name" id="name" class="form-control form-control-alternative">
                    <option value="" disabled selected>Seleccione una categoría</option>
                    <option value="Herramientas manuales" {{ old('name', $categories->name) == 'Herramientas manuales' ? 'selected' : '' }}>Herramientas manuales</option>
                    <option value="Herramientas eléctricas" {{ old('name', $categories->name) == 'Herramientas eléctricas' ? 'selected' : '' }}>Herramientas eléctricas</option>
                    <option value="Herramientas neumáticas" {{ old('name', $categories->name) == 'Herramientas neumáticas' ? 'selected' : '' }}>Herramientas neumáticas</option>
                    <option value="Materiales de construcción básicos" {{ old('name', $categories->name) == 'Materiales de construcción básicos' ? 'selected' : '' }}>Materiales de construcción básicos</option>
                    <option value="Materiales de construcción fijación" {{ old('name', $categories->name) == 'Materiales de construcción fijación' ? 'selected' : '' }}>Materiales de construcción fijación</option>
                    <option value="Materiales de construcción acabado" {{ old('name', $categories->name) == 'Materiales de construcción acabado' ? 'selected' : '' }}>Materiales de construcción acabado</option>
                    <option value="Cerrajería" {{ old('name', $categories->name) == 'Cerrajería' ? 'selected' : '' }}>Cerrajería</option>
                    <option value="Electricidad" {{ old('name', $categories->name) == 'Electricidad' ? 'selected' : '' }}>Electricidad</option>
                    <option value="Fontanería" {{ old('name', $categories->name) == 'Fontanería' ? 'selected' : '' }}>Fontanería</option>
                    <option value="Menaje" {{ old('name', $categories->name) == 'Menaje' ? 'selected' : '' }}>Menaje</option>
                    <option value="Jardinería" {{ old('name', $categories->name) == 'Jardinería' ? 'selected' : '' }}>Jardinería</option>
                    <option value="Seguridad" {{ old('name', $categories->name) == 'Seguridad' ? 'selected' : '' }}>Seguridad</option>
                    <option value="Otros" {{ old('name', $categories->name) == 'Otros' ? 'selected' : '' }}>Otros</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description"><i class="fas fa-pen"></i><b> Descripción</b></label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Ingresar descripción de la categoría"
                value="{{ old('description', $categories->description) }}">
            </div>
        </div>
    </div>


<hr class="my-4"/>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit"  class="btn btn-primary">
            <i class="fas fa-save"></i><b>Guardar Categoría</b>
        </button>
    </div>
</div>

