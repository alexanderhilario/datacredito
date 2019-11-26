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
          <form method="POST" action="{{ route('incidencias',$afiliado->id) }}">
            @csrf
             <div class="container">
                <div class="row">
                
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Incidencia</label>
                      <select class="form-control" name="incidencia" required>
                        <option value="1">Impuntualidad</option>
                        <option value="2">Otra</option>
                      </select>
                   </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                       <label>Puntuación</label>
                       <p class="clasificacion">
                          <input id="radio1" type="radio" name="puntuacion"  value="5"><!--
                          --><label for="radio1">★</label><!--
                          --><input id="radio2" type="radio" name="puntuacion"  value="4"><!--
                          --><label for="radio2">★</label><!--
                          --><input id="radio3" type="radio"  name="puntuacion" value="3"><!--
                          --><label for="radio3">★</label><!--
                          --><input id="radio4" type="radio" name="puntuacion"  value="2"><!--
                          --><label for="radio4">★</label><!--
                          --><input id="radio5" type="radio" name="puntuacion"  value="1"><!--
                          --><label for="radio5">★</label>
                        </p>
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nota</label>
                      <textarea class="form-control rounded-0" rows="10" name="nota"></textarea>
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