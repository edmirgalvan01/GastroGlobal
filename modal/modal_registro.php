<!-- Modal inicio sesion -->
<div class="modal fade" id="inicio_sesiones" tabindex="-1">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Bienvenido al inicio de sesion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form id="form_inicio_sesion" method="post" entype="multipart/form-data">
               <div class="modal-body">
               <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email2" class="form-control" id="email23" placeholder="name@example.com" required></input>
                     </div> 
                  <div class="mb-3">
                     <label class="form-label">Password</label>
                     <input type="password" name="password2" class="form-control" id="password23" required></input>
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" id="iniciar" class="btn btn-primary" data-bs-dismiss="modal">Iniciar sesion</button>
         </div>
      </div>
      </div>
   </div>
</div>

<!-- Modal registro-->
<div class="modal fade" id="registrar_user" tabindex="-1">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Bienvenido al registro de usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form id="registro_usuarios" method="post" entype="multipart/form-data">
               <div class="mb-3">
                  <label class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" id="nombre" name="nombre" required></input>
               </div>
               <div class="modal-body">
                  <form id="form_registro_user" method="post">
                     <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required></input>
                     </div>
                  </form>
                  <div class="mb-3">
                     <label class="form-label">Password</label>
                     <input type="password" name="password" class="form-control" id="password" required></input>
                  </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" id="registrar" class="btn btn-primary" data-bs-dismiss="modal">Registrar</button>
         </div>
      </div>
   </div>
</div>