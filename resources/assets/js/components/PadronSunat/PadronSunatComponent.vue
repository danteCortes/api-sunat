<template>
  <div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Subir Padron sunat</h1>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <p class="text-primary" style="margin-bottom: 0px;">Modelo del padrón reducido sunat</p>
            <img class="card-img-top img-thumbnail" :src="'storage/img/subirpadron.png'" alt="Card image cap">
            <h4 class="card-title">
              Subir Padron:
            </h4>
            <form id="frmSubirPadron" @submit.prevent="subirPadron">
              <div class="form-group row">
                <label class="col-form-label col-md-3">Archivo: </label>
                <div class="col-md-9">
                  <div class="custom-file">
                    <input type="file" class="form-control-sm custom-file-input" @change="agregarArchivo"
                    id="fileSubirPadron">
                    <label class="custom-file-label" v-text="nombre"></label>
                  </div>
                </div>
              </div>
              <span v-text="respuesta"></span>
              <button class="btn btn-primary btn-sm" id="btnSubirPadron">
                Subir Padron</button>
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
        $("#fileSubirPadron").attr('disabled', 'true');
        $("#btnSubirPadron").attr('disabled', 'true');
        var data = new  FormData();
        data.append('padron', this.archivo);
        axios.post('/api/subir-padron', data)
        .then((response) => {
          this.archivo = null;
          this.nombre = 'Subir Archivo';
          this.respuesta = response.data;
          $("#btnSubirPadron").removeAttr('disabled');
          $("#fileSubirPadron").removeAttr('disabled');
        }).catch((errors) => {
          this.archivo = null;
          this.nombre = 'Subir Archivo';
          this.respuesta = response.data;
          $("#btnSubirPadron").removeAttr('disabled');
          $("#fileSubirPadron").removeAttr('disabled');
        });
      }
    }
  }
</script>