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
              <h4 class="card-title">Lista de mis afiliados</h4>
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
                            <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#IncidenciaAdd" v-on:click.prevent="incidencidatos(item)">
                              <i class="mdi mdi-content-paste"></i>   Incidencia 
                            </button>
                          </td>
                          <td>
                            <a :href="`http://localhost/DataCreditos/public/perfil/` + item.id" class="btn btn-primary">
                              <i class="mdi mdi-account-box"></i> Perfil
                            </a>
                          </td>
                          <td>
                            <a href="" class="btn btn-danger" v-on:click.prevent="liberar(item)">
                              <i class="mdi mdi-account-remove"></i> Liberar
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


<div class="modal fade" id="IncidenciaAdd" tabindex="-1" role="dialog" aria-labelledby="IncidenciaAdd" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="IncidenciaAdd">Agregar incidencia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" v-on:submit.prevent="incidenciadd(fillitem.id)">
             <div class="container">
                <div class="row">
                
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Incidencia</label>
                      <select class="form-control" v-model="fillitem.incidencia" required>
                        <option value="1">Impuntualidad</option>
                        <option value="2">Otra</option>
                      </select>
                   </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                       <label>Puntuación</label>
                       <p class="clasificacion">
                          <input id="radio1" type="radio" v-model="fillitem.puntuacion" value="5"><!--
                          --><label for="radio1">★</label><!--
                          --><input id="radio2" type="radio" v-model="fillitem.puntuacion" value="4"><!--
                          --><label for="radio2">★</label><!--
                          --><input id="radio3" type="radio" v-model="fillitem.puntuacion" name="estrellas" value="3"><!--
                          --><label for="radio3">★</label><!--
                          --><input id="radio4" type="radio" v-model="fillitem.puntuacion" value="2"><!--
                          --><label for="radio4">★</label><!--
                          --><input id="radio5" type="radio" v-model="fillitem.puntuacion" value="1"><!--
                          --><label for="radio5">★</label>
                        </p>
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nota</label>
                      <textarea class="form-control rounded-0" rows="10" v-model="fillitem.nota"></textarea>
                    </div>
                  </div>
                </div>
             </div>
            <button  type="submit" class="btn btn-primary float-right">Guardar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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
  this.getafiliado();
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
      fillitem: {'id' : '', 'incidencia': '', 'nota': '', 'puntuacion': ''},
    }
  },
  methods: {
       getafiliado: function() {
          var url = 'http://localhost/DataCreditos/public/lista-de-mis-afiliados';
        
          axios.get(url).then(response => { 
              this.lists = response.data
          });
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
            this.getafiliado();
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

        incidencidatos: function(item) {
          this.fillitem.id            = item.id;
          this.fillitem.incidencia    = item.incidencia;
          this.fillitem.nota          = item.nota;
          this.fillitem.puntuacion    = item.puntuacion;
        },
        incidenciadd: function(id){

        var url = 'http://localhost/DataCreditos/public/incidencia/' + id;
        
          axios.post(url,this.fillitem).then(response => {
            this.errors =  [];
            $('#IncidenciaAdd').modal('hide');
            toastr.success('Agregado con éxito');
          }).catch(error => {
              this.errors = console.log(error.response.data) });
       },

       liberar: function (item) {

          var url = 'http://localhost/DataCreditos/public/liberar/' + item.id;
          
          axios.get(url).then(response => {
              this.getafiliado();
              this.errors =  [];
              toastr.success('Liberado con éxito');
          }).catch(error => {
                        this.errors = console.log(error.response.data)
                        });
       }

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

<style scoped>

.form-control {
    border: 1px solid #c1c1c1;
    font-weight: 400;
    font-size: 0.875rem;
}

.clasificacion{
      direction: rtl;/* right to left */
      unicode-bidi: bidi-override;/* bidi de bidireccional */
  }
  
  .clasificacion input[type="radio"] {
    display: none;
    }

.clasificacion label {
  color: grey;
  font-size: 40px;
}

.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}

.clasificacion label:hover,
label:hover ~ label {
  color: orange;
}

.clasificacion input[type="radio"]:checked ~ label {
  color: orange;
}
</style>
