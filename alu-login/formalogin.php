<div class="container mt-5">
   <div class="row justify-content-center">
       <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">  
                  <h2>SOLICITUD DE ENTRADA (Alumnos)</h2>
                </div>
                <div class="card-body">
                <form method="post" action="index.php">
                    <div class="form-group">
                        <label for="idalumno">No. de Control Ej: E16020870</label>
                        <input type="text" class="form-control" 
                         title="Formato una E seguido de 8 números, Ej.E16020870" 
                         placeholder="Formato una E seguido de 8 números, Ej.E16020870"
                         pattern="^[E][0-9]{8,8}$" required id="idalumno"  
                         name="idalumno">
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

