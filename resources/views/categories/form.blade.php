 <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="category"><i class="fas fa-weight-hanging"></i><b> categoría</b></label>
                <select name="category" id="category" class="form-control form-control-alternative">
                    <option value="" disabled selected>Seleccione la categoría</option>
                    <option value="Herramientas manuales" {{ old('category', $categories->category) == 'Herramientas manuales' ? 'selected' : '' }}>Herramientas manuales</option>
                    <option value="Herramientas eléctricas" {{ old('category', $categories->category) == 'Herramientas eléctricas' ? 'selected' : '' }}>Herramientas eléctricas</option>
                    <option value="Herramientas neumáticas" {{ old('category', $categories->category) == 'Herramientas neumáticas' ? 'selected' : '' }}>Herramientas neumáticas</option>
                    <option value="Materiales de construcción básicos" {{ old('category', $categories->category) == 'Materiales de construcción básicos' ? 'selected' : '' }}>Materiales de construcción básicos</option>
                    <option value="Materiales de construcción fijación" {{ old('category', $categories->category) == 'Materiales de construcción fijación' ? 'selected' : '' }}>Materiales de construcción fijación</option>
                    <option value="Materiales de construcción acabado" {{ old('category', $categories->category) == 'Materiales de construcción acabado' ? 'selected' : '' }}>Materiales de construcción acabado</option>
                    <option value="Cerrajería" {{ old('category', $categories->category) == 'Cerrajería' ? 'selected' : '' }}>Cerrajería</option>
                    <option value="Electricidad" {{ old('category', $categories->category) == 'Electricidad' ? 'selected' : '' }}>Electricidad</option>
                    <option value="Fontanería" {{ old('category', $categories->category) == 'Fontanería' ? 'selected' : '' }}>Fontanería</option>
                    <option value="Menaje" {{ old('category', $categories->category) == 'Menaje' ? 'selected' : '' }}>Menaje</option>
                    <option value="Jardinería" {{ old('category', $categories->category) == 'Jardinería' ? 'selected' : '' }}>Jardinería</option>
                    <option value="Seguridad" {{ old('category', $categories->category) == 'Seguridad' ? 'selected' : '' }}>Seguridad</option>
                    <option value="Otros" {{ old('category', $categories->category) == 'Otros' ? 'selected' : '' }}>Otros</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description"><i class="fas fa-building"></i><b> Descripción</b></label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Ingresar descripción del proveedor"
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

