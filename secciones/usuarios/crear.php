      
<br/>

     <div class="card">
     <div class="card-header">
         Datos de Usuarios
     </div>
     <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
               <div class="mb-3">
                 <label for="usuario" class="form-label">Nombre del usuario:</label>
                 <input type="text"
                   class="form-control" name="lusuario" id="usuario" aria-describedby="helpId" placeholder="usuario">

                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password"
                        class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Escriba contraseña">
                    </div>
                    <div class="mb-3">
                    <label for="correo" class="form-label">Email</label>
                    <input type="email"
                    class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Escriba su correo:">
                    </div>
                                        <button type="submit" class="btn btn-success">Agregar</button> 
                                        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
</form>
                    </div>
     <div class="card-footer text-muted">
          
     </div>
</div>

<?php include("../../templates/footer.php"); ?>