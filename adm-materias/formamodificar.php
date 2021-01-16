<div class="container">
    <div class="row justify-content-center">
         <div class="col-12 col-md-8">
             <div class="card">
                 <div class="card-header bg-dark text-white">
                    <h3 class="text-center">EDITAR MATERIAS</h3>
                 </div>
                 <div class="card-body">
                     <form action="modificar.php" method="post">
                                <div class="form-group">
                                    <label for="idmateria">ID MATERIA</label>
                                    <input type="text" name="idmateria" id="idmateria"
                                    required  class="form-control" pattern="^[0-9][A-ZÑ][0-9]$"
                                    placeholder="Captura el ID de la materia Ej.(8J4)"
                                    value="<?php echo $idmateria;?>" readonly
                                    title="Captura el ID de la materia Ej.(8J4 NUMERO LETRA NUMERO)"
                                    >
                                </div>
                                 <div class="form-group">
                                    <label for="nombre">NOMBRE DE MATERIA</label>
                                    <input type="text" name="nombre" id="nombre"
                                    class="form-control" value="<?php echo $nombre; ?>"
                                    required pattern="^[A-ZÑÁÉÍÓÚ ]{3,32}$" 
                                    placeholder="Captura el nombre de la materia solo en mayúsculas"
                                    title="Captura el nombre de la materia solo en mayúsculas"
                                    >
                                 </div>
                                 <div class="form-group">
                                    <label for="creditos">CREDITOS DE LA MATERIA (1 A 6 MAX)</label>
                                    <input type="number" name="creditos" id="creditos" min="1" max="6"
                                    class="form-control" required value="<?php echo $creditos; ?>"
                                    placeholder="Captura los créditos de la materia (Mínimo 1 y máximo 6)"
                                    title="Captura los créditos de la materia (Mínimo 1 y máximo 6)"
                                    >
                                 </div>

                            <div class="text-right">
                                <input type="submit" class="btn btn-info"
                                value="GRABAR REGISTRO" name="btnModificar">
                            </div>
                         </div> 
                     </form>
                     </div>
                        <?php
                            if(isset($errmensaje)){
                                echo "
                                <div class='card-footer'>
                                    <div class='alert alert-danger'>
                                        $errmensaje;
                                    </div>
                                </div>
                                ";
                            }
                        ?>    
             </div>
         </div>
    </div>
</div>