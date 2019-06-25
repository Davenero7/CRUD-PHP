<!DOCTYPE HTML>

<html>


<?php
// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada.
$PDO= new PDO('mysql:host=localhost;dbname=prueba', 'root', ''); // el campo vaciío es para la password.

?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>

  <link rel="stylesheet" href="../css/bootstrap.css">

</head>

<body>

<table class="table table-striped">
<thead>
  <tr>
    <td>id</td>
    <td>Palabra</td>
    <td>Definición</td>
    <td>Accion</td>
    <td>Accion</td>
  </tr>
</thead>


<?php
$consulta = $PDO -> prepare("select * from datos");
$consulta->execute();
if ($consulta->rowCount()>=1) {
  while ($fila = $consulta-> fetch()) {
    echo "
    <tr>
      <td>".$fila['idpersona']."</td>
      <td>".$fila['nombre']."</td>
      <td>".$fila['apellidopaterno']."</td>
      <td><a href='editar.php?id=".$fila['idpersona']."'>Actualizar</a></td>
			<td><a href='borrar.php?id=".$fila['idpersona']."'>Eliminar</a></td>
    </tr>
    ";
  }
}
else{
  echo "<tr>
    <td colspan='4'>No hay datos</td>
  </tr>";
}

 ?>
</table>



	<footer>
		<p>Copyright Dave </p>
	</footer>

</body>

</html>
