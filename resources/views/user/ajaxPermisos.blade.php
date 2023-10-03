<input type="hidden" id="usuario_id" value="{{ $usuario->id }}">
<div class="row">
    <div class="col-md-12">
        <div class="mb-15 fv-row">
            <div class="d-flex flex-stack">
                <div class="d-flex align-items-center">
                    <label class="form-check form-check-custom form-check-solid me-15">
                        <input class="form-check-input h-20px w-20px" type="checkbox" name="permisos[]" value="USR" {{ (in_array("USR",$permisos))? 'checked="checked"' : '' }} />
                        <span class="form-check-label fw-semibold">USUARIOS</span>
                    </label>
                    <label class="form-check form-check-custom form-check-solid me-15">
                        <input class="form-check-input h-20px w-20px" type="checkbox" name="permisos[]" value="ROL"  {{ (in_array("ROL",$permisos))? 'checked="checked"' : '' }}/>
                        <span class="form-check-label fw-semibold">ROLES</span>
                    </label>
                    <label class="form-check form-check-custom form-check-solid me-15">
                        <input class="form-check-input h-20px w-20px" type="checkbox" name="permisos[]" value="CLI"  {{ (in_array("CLI",$permisos))? 'checked="checked"' : '' }} />
                        <span class="form-check-label fw-semibold">CLIENTES</span>
                    </label>
                    <label class="form-check form-check-custom form-check-solid me-15">
                        <input class="form-check-input h-20px w-20px" type="checkbox" name="permisos[]" value="PRO"  {{ (in_array("PRO",$permisos))? 'checked="checked"' : '' }}/>
                        <span class="form-check-label fw-semibold">PROCESOS</span>
                    </label>
                    <label class="form-check form-check-custom form-check-solid me-15">
                        <input class="form-check-input h-20px w-20px" type="checkbox" name="permisos[]" value="TRA"  {{ (in_array("TRA",$permisos))? 'checked="checked"' : '' }}/>
                        <span class="form-check-label fw-semibold">TRAMITES</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
