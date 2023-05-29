<?php
 include 'conexion_bd.php';
 $result = mysqli_query($conectar,'SELECT * FROM personal');
if(isset($_POST['buscar'])){
  $nombre=$_POST['personal'];
  $result = mysqli_query($conectar,"SELECT * FROM personal WHERE nombre LIKE '%$nombre%'");
}



 //inicio de sesion
 session_start();
if($_SESSION['usuario']){
 echo"Bienvenido " . $_SESSION["usuario"];
}else{
    header("location:login.html");
}

 
 ?>
<a href="logout.php">Cerrar sesion</a>

<!--DISEÑO-->
<!doctype html>
<html lang="es">
  <head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
    .n{
        margin-top: 100px;
    }
</style>
<!-- ESTILOS SWEET ALERT -->



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  


  <h1 class="text-center"><strong>Registro de usuarios</strong></h1>
      <div class="container justify-items-center n">
      <div class="row">
      <div class="col-xs-12 col-lg-0">
     
      
     
      </div>
      <div class="col-xs-12 col-lg-10 p-0 ">
        <form action="dashboard.php" method="post">
          <div class="row">
            <div class="col-6">
              <input type="text" name="personal" class="form-control">

            </div>
            <div class="col-6">
              <input type="submit" name="buscar" value="Buscar" class="btn btn-secondary">

            </div>

          </div>
        </form>
      <table class="table " >
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contraseña</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $row){ ?>
    <tr>
    <td><?php echo $row['idp'] ?></td>
      <td><?php echo $row['usuario'] ?></td>
      <td><?php echo $row['password'] ?></td>
 
      <td><a href="agregar.php?idp=<?php echo $row['idp']?>" class="btn btn-success" >Agregar</a></td>
      <td><a href="editar.php?idp=<?php echo $row['idp']?>" class="btn btn-primary">Editar</a></td>
      <td><a href="eliminar.php?idp=<?php echo $row['idp']?>" class="btn btn-danger" >Eliminar</a></td>
    </tr>
        <?php }?>
  </tbody>
</table>



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