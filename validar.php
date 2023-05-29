<?php
session_start();
include 'conexion_bd.php';


$usuario = $_POST['usuario'];
$password = $_POST['password'];


$consulta = "SELECT* FROM personal where usuario = '$usuario' and password ='$password' ";
$resultado= mysqli_query($conectar, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    $_SESSION['usuario']=$usuario;
    header("location:dashboard.php");
    session_start();
    $_SESSION['msj']="ingreso";

}else{
    echo "<script> alert('Datos incorrectos');
    location.href = 'login.html';
    </script>";

}
mysqli_free_result($resultado);
mysqli_close($conectar);





?>