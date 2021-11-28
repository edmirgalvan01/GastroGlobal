<!-- Modal editar Restaurant -->
<div class="modal fade" id="modal_editar_restaurant" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Restaurant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="Post" enctype="multipart/form-data" id="form_edit_pokemo">
                    <input type="hidden" name="id" id="id_m">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" name="nombre" id="nombre_m" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Descripcion</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="descripcion" id="descripcion_m">
                        </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Telefono de contacto</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="telefono" id="telefono_m">
                        </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Telefono de contacto</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="telefono" id="telefono_m">
                        </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Direccion</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="direccion" id="direccion_m">
                        </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Propietario</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="propietario" id="propietario_m">
                        </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" name="foto" id="foto_m">
                                </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="email" id="email_m">
                        </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Horario de entrada</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="horario1" id="horario1_m">
                        </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Horario de salida</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="horario2" id="horario2_m">
                        </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Especialidad</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="especialidad" id="especialidad_m">
                        </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Dias laborales</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="dias" id="dias_m">
                        </div>
                    </div>    
                    </div>
                    </div>   
                    </div>
                    </div>
                        </div>
                      </div>  
                    </div>
                   </div>    
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="update_pokemon" data-bs-dismiss="modal">Modificar</button>
            </div>
        </div>
    </div>