<template>
<div>

<div class="row">

      <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <h4 class="card-title">Filtro de búsqueda</h4>
                
                <div class="form-inline float-right">
                
                    <div class="form-group mb-2 px-2">
                      <input type="text" v-model="dni" class="form-control" placeholder="Documento de identidad">
                    </div>
                    
                    <div class="form-group mb-2 px-2">
                      <input type="text"  v-model="nombre" class="form-control" placeholder="Nombre">
                    </div>
                    
                    <div class="form-group mb-2 px-2">
                      <input type="text"  v-model="apellido" class="form-control" placeholder="Apellido">
                    </div>
                    
                    <div class="form-group mb-2 px-2">
                      <input type="text"  v-model="telefono" class="form-control" placeholder="Telefono">
                    </div>
          
                    
                 </div>
                 
            </div>
          </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Lista de afiliados libres</h4>
              <div class="table-responsive">

                <table class="table table-striped">
                  <thead>
                      <tr>
                          <th></th>
                          <th>
                           <b>Cédula / Pasaporte</b> 
                          </th>
                          <th>
                            <b>Nombre</b>
                          </th>
                          <th>
                            <b>Apellido</b>
                          </th>
                          <th>
                            <b>Teléfono</b> 
                          </th>
                          <th></th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in searchMisAfiliados">
                          <td class="py-1" v-if="item.user_imagen === null">
                            <img src="http://localhost/DataCreditos/public/assets-app/images/faces/perfil.png" alt="image"/>
                          </td>
                          <td class="py-1" v-else>
                            <img :src="`data:image/jpeg;base64,`+item.user_imagen.image" alt="image"/>
                          </td>
                          <td>{{ item.dni }}</td>
                          <td>{{ item.nombre }}</td>
                          <td>{{ item.apellido }}</td>
                          <td>{{ item.telefono }}</td>
                          <td>
                            <a :href="`http://localhost/DataCreditos/public/perfil/` + item.id" class="btn btn-primary">
                              <i class="mdi mdi-account-box"></i> Perfil
                            </a>
                          </td>
                          <td>
                            <a href="" class="btn btn-success" v-on:click.prevent="contratar(item)">
                              <i class="mdi mdi-account-check"></i> Contratar
                            </a>
                          </td>
                      </tr>
                  </tbody>
                </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar un nuevo afiliado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" v-on:submit.prevent="afiliadoadd()">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="tipo-dni">Tipo DNI</label>
                  <select class="form-control" v-model="tipo_dni">
                    <option value="1">cédula</option>
                    <option value="2">Pasaporte</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="dni">cédula / Pasaporte</label>
                  <input type="number" v-model="documento" class="form-control" id="dni" placeholder="cédula / Pasaporte">
                </div>

                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" v-model="nombreA" id="nombre" placeholder="Nombre">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="apellido">Apellidos</label>
                  <input type="text" class="form-control"  v-model="apellidoA" id="apellido" placeholder="Apellidos">
                </div>
                <div class="form-group">
                  <label for="telefono">Teléfono</label>
                  <input type="number" class="form-control" v-model="telefonoA" id="telefono" placeholder="Teléfono">
                </div>
                <div class="form-group">
                  <label for="pais">País</label>
                  <select class="form-control" v-model="paisA">
                    <option value="1">República Dominicana</option>
                    <option value="2">Haití</option>
                  </select>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

        </form>
      </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

    </div>
    </div>
  </div>
</div>


</div>
</template>

<script>

import toastr from 'toastr'

export default {
created: function() {
  this.getafiliadolibre();
  },
  data() {
    return {
        lists: [],
        dni: '',

        tipo_dni: '',
        documento:  '',
        nombreA: '',
        apellidoA: '',
        telefonoA: '',
        paisA: '',
        error: [],
        nombre: '',
        apellido: '',
        telefono: '',
        pais: '',
    }
  },
  methods: {
       getafiliadolibre: function() {
          var url = 'http://localhost/DataCreditos/public/lista-de-sin-contratar';
        
          axios.get(url).then(response => { 
              this.lists = response.data
          });
       },
      contratar: function (item) {
        
	      var url = 'http://localhost/DataCreditos/public/contratar/' + item.id;
	      
	      axios.get(url).then(response => {
	          this.getafiliadolibre();
	          this.errors =  [];
	          toastr.success('Contratado con éxito');
	      }).catch(error => { this.errors = console.log(error.response.data) });
	   },
  
      afiliadoadd: function () {

          var urlcreate = 'http://localhost/DataCreditos/public/crear-afiliados';
          axios.post(urlcreate, { 
            tipo_dni: this.tipo_dni,
            dni: this.documento,
            nombre: this.nombreA,
            apellido: this.apellidoA,
            telefono: this.telefonoA,
            pais: this.paisA
          }).then(response => {
            this.getafiliadolibre();
            this.tipo_dni = '';
            this.documento = '';
            this.nombreA = '';
            this.telefonoA = '';
            this.telefono = '';
            this.paisA = '';
            this.errors = [];
            $('#exampleModal').modal('hide');
            toastr.success('Agregado con éxito');
          }).catch(error => {
            this.errors = console.log(error.data)
            });
        },

    },
  computed: {
            searchMisAfiliados: function () {
               return this.lists.filter((item) => {
                return item.dni.includes(this.dni) && item.nombre.includes(this.nombre) && item.apellido.includes(this.apellido) && item.telefono.includes(this.telefono);
                });
            }
       }
}
</script>