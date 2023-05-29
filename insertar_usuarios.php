<?php
require 'conexion_bd.php';
$usuario = $_POST['usuario'];
$password= $_POST['password'];

$insertar = "INSERT INTO personal VALUES ('$idp','$usuario','$password') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('Registro satisfactorio');
   location.href = 'login.html';
   </script>";

}else{
    echo "<script> alert('Ha habido un problema con el ingreso de datos');
    location.href = 'login.php';
    </script>";
}
;






?>