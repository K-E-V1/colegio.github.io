<?php
  include 'conexion_bd.php';

    $id = $_GET['id'];
    $result = mysqli_query($conectar,"select * from pass where id = '$id'");
    $row = mysqli_fetch_assoc($result);
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $nombre = $_POST['nombre'];
       $correo = $_POST['correo'];
       $asunto = $_POST['asunto'];
       $mensaje = $_POST['mensaje'];
        $resultt = mysqli_query($conectar,"update pass set nombre = '$nombre',correo = '$correo',asunto = '$asunto',mensaje = '$mensaje' where id = '$id'");
        if($resultt){
        header('location: dashboard.php');
        }
    }


     //inicio de sesion
 session_start();
 if($_SESSION['usuario']){
  echo"Bienvenido " . $_SESSION["usuario"];
 }else{
     header("location:login.html");
 }
 

 ?>
<!doctype html>
<html lang="es">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<style>
    .n{
        margin-top: 100px;
        justify-content:  center;
    }
</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
      <div class="row n">
      <div class="col-xs-12 col-lg-5">
      <form method="POST">
      <h1 class="text-center"><strong>Editar Comentarios</strong></h1>
      <br>
      <h4>Nombre</h4>
      <input type="text" placeholder="Nombre" value="<?php echo $row['nombre'];?>" name="nombre" class="form-control">
      <br>
      <h4>Correo</h4>
      <input type="text" placeholder="correo" value="<?php echo $row['correo'];?>" name="correo" class="form-control">
      <br>
      <h4>Asunto</h4>
      <input type="text" placeholder="asunto" value="<?php echo $row['asunto'];?>" name="asunto" class="form-control">
      <br>
      <h4>Mensaje</h4>
      <input type="text" placeholder="mensaje" value="<?php echo $row['mensaje'];?>" name="mensaje" class="form-control">

      
      <br>
     <input type="submit" name="editar" value="Editar" class="btn btn-primary btn-block">
      </form>
      </div>
      </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>