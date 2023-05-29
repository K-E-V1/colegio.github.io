<?php
 //inicio de sesion
 session_start();
if($_SESSION['usuario']){
 echo"Bienvenido " . $_SESSION["usuario"];
}else{
    header("location:login.html");
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        .n {
            margin-top: 100px;
            justify-content: center;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row n">
            <div class="col-xs-12 col-lg-5">
                <form method="POST" name="form-work" action="insertar.php">
                    <h1 class="text-center"><strong>Agregar comentarios</strong></h1>
                    <input type="text" name="nombre" placeholder="Ingresa tu nombre"  class="form-control">
                    <br>
                    <input type="email" name="correo" placeholder="Ingresa tu correo"  class="form-control"><br>

                    <input type="text" name="asunto" placeholder="Ingresa el asunto" class="form-control"><br>

                    <textarea type="text" name="mensaje" placeholder="Ingrese su mensaje "  class="form-control"></textarea><br>

                    <select name="categoria" >
                        <option value="Opccion1">Opccion1</option>
                        <option value="Opccion2">Opccion2</option>
                        <option value="Opccion3">Opccion3</option>
                    </select>
                    <br>
                    <br>

                    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>