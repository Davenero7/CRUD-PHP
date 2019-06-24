<!DOCTYPE HTML>

<html>

<?php
// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada.
$PDO= new PDO('mysql:host=localhost;dbname=prueba', 'root', ''); // el campo vaciío es para la password.

?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
  <link href="../css/bootstrap.css" rel="stylesheet">
</head>

<body>

<table class="table table-striped">
<thead>
  <tr>
    <td>id</td>
    <td>nombre</td>
    <td>apellido paterno</td>
    <td>Acion</td>
  </tr>
</thead>

<?php foreach ($PDO -> query("select * from datos") as $row) { ?>
<tr>
<td><?php echo $row['idpersona'] ?></td>
<td><?php echo $row['nombre'] ?></td>
<td><?php echo $row['apellidopaterno'] ?></td>
<td> <a href="editar.php"><input type="button" value="Ir"></a>  </td>
</tr>



<?php } ?>




</table>


	<footer>
		<p>Copyright Dave </p>
	</footer>

</body>

</html>
