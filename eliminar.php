<?php
  include 'conexion_bd.php';

$id = $_GET['id'];
$query = "DELETE FROM pass where (id = '$id')";
$result = mysqli_query($conectar,$query);
if($query){
    header('location:dashboard.php');
}

?>