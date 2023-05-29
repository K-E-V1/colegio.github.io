<?php
require 'conexion_bd.php';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$categoria = $_POST['categoria'];

$agregar = "INSERT INTO pass VALUES ('$id','$nombre','$correo','$asunto','$mensaje','$categoria') ";

$query = mysqli_query($conectar, $agregar);

if($query){

   echo "<script> alert('correcto');
   location.href = 'dashboard.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = 'dashboard.php';
    </script>";
}
;






?>