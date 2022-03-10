<?php
    require_once "header.php";
    require_once "footer.php";
    require_once "./clases/Conexion.php";
    require_once "./clases/Metodos.php";
?>

<div class="container">
    <h1 class="text-center">Examen unidad 1 - Suits de Desarrollo Web</h1>
    <div class="row">
        <div class="col-md-12 border">
            <br>
            <h3>Datos del Empleado</h3>
            <form action="procesos/insertar.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Sueldo</label>
                        <input type="text" name="sueldo" required class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Edad</label>
                        <input type="text" name="edad" required class="form-control" id="inputEmail4">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputState">Sexo</label>
                        <select id="inputState" class="form-control" required name="sexo">
                            <option selected>Seleccionar sexo...</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="No especifico">No especifico</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Nacionalidad</label>
                        <select id="inputState" class="form-control" required name="nacionalidad">
                            <option selected>Seleecionar nacionalidad...</option>
                            <option value="Nacional">Nacional</option>
                            <option value="Extranjero">Extranjero</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8 border-right">
                        <p></p>
                        <h3>Cursos</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="php" value="1">
                                    <label class="custom-control-label" for="customCheck1">PHP</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="asp" value="1">
                                    <label class="custom-control-label" for="customCheck2">ASP.Net</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="vb" value="1">
                                    <label class="custom-control-label" for="customCheck3">VB.Net</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4" name="java" value="1">
                                    <label class="custom-control-label" for="customCheck4">Java</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5" name="oracle" value="1">
                                    <label class="custom-control-label" for="customCheck5">Oracle</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6" name="bd" value="1">
                                    <label class="custom-control-label" for="customCheck6">Introduccion a BD</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p></p>
                        <h3>Antigüedad</h3>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="antiguedad" value="1 a 5 años" required class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">1 a 5 años</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="antiguedad" value="6 a 10 años" required class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">6 a 10 años</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="antiguedad" value="Más de 10 años" required class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3">Más de 10 años</label>
                        </div>
                        <p></p>
                    </div>
                </div>
                <hr>
                <button class="btn btn-primary">Calcular y Guardar</button>
                <p></p>
            </form>
        </div>
    </div>
</div>
<br>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Listado de Informacion</h1>
            <table class="table table-sm table-bordered text-center">
                <thead>
                    <tr>
                        <th>Sueldo</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Nacionalidad</th>
                        <th>Antigüedad</th>
                        <th>PHP</th>
                        <th>ASP.Net</th>
                        <th>VB.Net</th>
                        <th>Java</th>
                        <th>Oracle</th>
                        <th>BD</th>
                        <th>Bono</th>
                    </tr>
                </thead>
                <?php
					$objeto = new Metodos();
					$sql="SELECT id,sueldo,edad,sexo,nacionalidad,antiguedad,php,asp,vb,java,oracle,bd,bono FROM t_datos";
					$datos=$objeto->mostrarDatos($sql);
					foreach ($datos as $key) {
				?>
                <tbody>
                    <tr>
                        <!--<td><?php //echo $key['nombre']; ?></td>-->
                        <td><?php echo "$".$key['sueldo']; ?></td>
                        <td><?php echo $key['edad']; ?></td>
                        <td><?php echo $key['sexo']; ?></td>
                        <td><?php echo $key['nacionalidad']; ?></td>
                        <td><?php echo $key['antiguedad']; ?></td>
                        <td>
                            <?php 
                                if ($key['php']==1) {
                            ?>
                            <i class="fa fa-check-circle fs-4"></i>
                            <?php
                                }else{
                            ?>
                            <i class="fa fa-times-circle fs-4"></i>
                            <?php
                                }
                            ?>
                        </td>
                        <td>
                            <?php 
                                if ($key['asp']==1) {
                            ?>
                            <i class="fa fa-check-circle fs-4"></i>
                            <?php
                                }else{
                            ?>
                            <i class="fa fa-times-circle fs-4"></i>
                            <?php
                                }
                            ?>
                        </td>
                        <td>
                            <?php 
                                if ($key['vb']==1) {
                            ?>
                            <i class="fa fa-check-circle fs-4"></i>
                            <?php
                                }else{
                            ?>
                            <i class="fa fa-times-circle fs-4"></i>
                            <?php
                                }
                            ?>
                        </td>
                        <td>
                            <?php 
                                if ($key['java']==1) {
                            ?>
                            <i class="fa fa-check-circle fs-4"></i>
                            <?php
                                }else{
                            ?>
                            <i class="fa fa-times-circle fs-4"></i>
                            <?php
                                }
                            ?>
                        </td>
                        <td>
                            <?php 
                                if ($key['oracle']==1) {
                            ?>
                            <i class="fa fa-check-circle fs-4"></i>
                            <?php
                                }else{
                            ?>
                            <i class="fa fa-times-circle fs-4"></i>
                            <?php
                                }
                            ?>
                        </td>
                        <td>
                            <?php 
                                if ($key['bd']==1) {
                            ?>
                            <i class="fa fa-check-circle fs-4"></i>
                            <?php
                                }else{
                            ?>
                            <i class="fa fa-times-circle fs-4"></i>
                            <?php
                                }
                            ?>
                        </td>
                        <td><?php echo "$".$key['bono']; ?></td>
                    </tr>
                </tbody>
                <?php
					}
				?>
            </table>
        </div>
    </div>
</div>