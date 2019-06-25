<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
  	<link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>
Hola Mundo <br><br>
<?php
  if (isset($_GET['idpersona'])) {
    $idpersona=$_GET['idpersona'];
    $consulta=$PDO->prepare("select * from prueba where idpersona=:idpersona");
    $consulta->bindParam(":idpersona", $idpersona);
    $consulta->execute();
    if($consulta->rowCount>=1){
      $fila=$consulta->fetch();
      echo' <form action="" method="POST">
				<input type="hidden" name="idpersona" value="'.$fila['idpersona'].'">
				<label>Nombre</label><input type="text" value="'.$fila['nombre'].'" name="nombre" required=""><br><br>
				<label>Apellido</label><input type="text" value="'.$fila['apellidopaterno'].'" name="apellidopaterno" required=""><br><br>
				<input type="submit" value="Actualizar">
        </form> ';
    }
    else {
      echo "ocurrio un error";
    }

  }
  else {
   echo "Ocurrio un error";
  }

 ?>


  </body>
</html>
