<div class="container mt-5">
   <div class="row justify-content-center">
       <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">  
                  <h2>SOLICITUD DE ENTRADA (Administradores)</h2>
                </div>
                <div class="card-body">
                <form method="post" action="index.php">
                    <div class="form-group">
                        <label for="idadministrador">ID. Administrador Ej: R.F.C. MADV9712038J9</label>
                        <input type="text" class="form-control" 
                         title="Formato de R.F.C." 
                         placeholder="Formato de R.F.C."
                         pattern="^[A-Z]{4,4}[0-9]{7,7}[A-Z][0-9]{1,1}$" required id="idadministrador"  
                         name="idadministrador">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="Contraseña"
                        name="password" required>
                    </div>
                   <div class="text-right">
                       <input class="btn btn-info"type="submit" value="SOLICITAR ENTRADA" 
                       name="btnLogin">
                   </div>
                    </form>
                    <?php
                        if(isset($errmensaje)){
                            echo "
                            <div class='alert alert-danger'>
                                $errmensaje
                            </div>
                            ";
                        }
                    ?>
                </div>
            </div>
       </div>
   </div>
</div>

