<template>
  <div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Subir Padron sunat</h1>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              Subir Padron:
            </h4>
            <form id="frmSubirPadron">
              <div class="form-group row">
                <label class="col-form-label col-md-3">Archivo: </label>
                <div class="col-md-9">
                  <div class="custom-file">
                    <input type="file" class="form-control-sm custom-file-input" @change="agregarArchivo">
                    <label class="custom-file-label" v-text="nombre"></label>
                  </div>
                </div>
              </div>
              <span v-text="respuesta"></span>
              <button class="btn btn-primary" @click.prevent="subirPadron">Subir Padron</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'padron-sunat',
    data(){
      return {
        archivo: null,
        nombre: 'Subir Archivo',
        respuesta: null
      }
    },
    methods: {
      agregarArchivo(){
        this.archivo = event.target.files[0];
        this.nombre = this.archivo.name;
      },
      subirPadron(){
        var data = new  FormData();
        data.append('padron', this.archivo);
        axios.post('/api/subir-padron', data)
        .then((response) => {
          this.archivo = null;
          this.nombre = 'Subir Archivo';
          this.respuesta = response.data;
        });
        console.log("subir padron");
      }
    }
  }
</script>