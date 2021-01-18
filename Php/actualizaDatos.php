<?php
  require_once "conexion.php";
  $conexion=conexion();
  
  $id_paciente= $_POST['id_paciente'];
  $n = $_POST['nombre'];
  $a = $_POST['apellido'];
  $e = $_POST['email'];
  $t = $_POST['telefono'];

  $sql = "UPDATE t_pacientes set nombre='$n', 
                                 apellido='$a', 
                                 email='$e', 
                                 telefono='$t'
            where id_paciente='$id_paciente' ";

  echo $result = mysqli_query($conexion,$sql);

?>