<!-- Modal editar Restaurant -->
<div class="modal fade" id="editar_m" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Restaurant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="Post" enctype="multipart/form-data" id="form_editar_restaurant">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3 row">
                        <input type="hidden" value="" id="imagen2" name="imagen2">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-8">
                            <img src="" alt="" id="imagen_m" height="50px" width="50px">
                            <input type="file" class="form-control" name="foto" id="foto_m">
                        </div>
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
                                <label for="inputPassword" class="col-sm-2 col-form-label">Especialidad</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="especialidad" id="especialidad_m">
                                </div>
                            </div>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="subir_restaurant" data-bs-dismiss="modal">Modificar</button>
            </div>
        </div>
    </div>