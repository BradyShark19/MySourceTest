<?php
    require_once "../Php/conexion.php";
    $conexion = conexion(); 
?>

<div class="row">    
    <div class="col-sm-12">
        <h2>Pacientes Oftalmologia Prueba</h2>
        <caption>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevo">Agregar Paciente</button>
        </caption>
        <table class= "table table-hover table-condensed table-bordered">
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Email</td>
                <td>Telefono</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

            <?php
                $sql="SELECT id_paciente, nombre, apellido, email, telefono
                         from t_pacientes";

                $result= mysqli_query($conexion,$sql); 
                while($ver=mysqli_fetch_row($result)){    
                    
                 $datos = $ver[0]."||".
                          $ver[1]."||".
                          $ver[2]."||".
                          $ver[3]."||".
                          $ver[4];   
            ?>

            <tr>
                <td><?php echo $ver[1]?></td>
                <td><?php echo $ver[2]?></td>
                <td><?php echo $ver[3]?></td>
                <td><?php echo $ver[4]?></td>
                <td>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdicion" 
                    onclick="AgregaForm('<?php echo $datos ?>')"> </button>
                </td>
                <td>
                    <button class="btn btn-danger"></button>  
                </td>
            </tr>

            <?php
                }
            ?>

        </table>
    </div>
</div>