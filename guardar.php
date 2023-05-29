<?php
require 'conexion_bd.php';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$categoria = $_POST['categoria'];

$insertar = "INSERT INTO pass VALUES ('$id','$nombre','$correo','$asunto','$mensaje','$categoria') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('Datos ingresados correctamente');
    location.href = 'pass.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = 'pass.html';
    </script>";
}
;






?>