<div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-12 col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h2 class="text-center">Registro al foro</h2>
                  </div>
                  <div class="card-body">
                  <form action="index.php" method="post" onsubmit ="return validar();">

                    <div class="mb-3">
                      <label for="nombre_usuario" class="form-label">Nombre del Usuario</label>
                      <input type="text" class="form-control" 
                        id="nombre_usuario" name= "nombre_usuario"
                        placeholder="Escriba su nombre de Usuario"
                        title="Escriba su nombre de usuario"
                        pattern="^[A-Za-z0-9]{6,50}$" required>
                    </div>

                    <div class="mb-3">
                      <label for="email_usuario">Email</label>
                      <input type="email" class="form-control" 
                        id="email_usuario" name= "email_usuario"
                        placeholder="Escriba su correo"
                        title="Escriba su correo"
                        required>
                    </div>

                    <div class="mb-3">
                    <label for="password_usuario">Contraseña</label>
                    <input type="password" class="form-control" 
                      id="password_usuario" name="password_usuario"
                      placeholder="Escriba su contraseña"
                      title="Escriba su contraseña"
                      required>
                    </div>            

                    <div class="text-center">
                      <input type="submit" class="btn btn-info text-white" 
                      value="Registrar" >
                      <p class="form_link">¿Ya tienes una cuenta?
                        <a href="../usuario-login/">Ingresa aquí</a> </p>
                    </div>
                    </form>
                </div>
       
                  <div class="card-footer text-right">
                    <p>¡Gracias por usar el Foro CineTec!</p>
                  </div>

                  
                </div>
              </div>
            </div>
        </div>