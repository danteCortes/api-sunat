<template>
  <div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Obligados sunat</h1>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card bg-primary text-white">
          <div class="card-body">
            <h4 class="card-title">
              Subir archivos:
            </h4>
            <div class="form-group row">
              <label class="col-form-label col-md-3">Archivo: </label>
              <div class="col-md-9">
                <div class="custom-file">
                  <input type="file" class="form-control-sm custom-file-input" lang="es">
                  <label class="custom-file-label">Subir Archivo</label>
                </div>
              </div>
            </div>
            <button class="btn btn-primary">Subir Padron</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'obligados-sunat-inicio'
  }
</script>