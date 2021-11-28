<!-- Modal eliminar Restaurant -->
<div class="modal fade" id="modal_elimrest" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Eliminar Restaurant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form_eliminar_restaurant">
          <input type="hidden" name="id" id="id_e">
        </form>
        <div class="alert alert-danger" role="alert">
          ¿Estas seguro que deseas eliminar este restaurant?
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="delete_restaurant">Eliminar</button>
      </div>
    </div>
  </div>
</div>