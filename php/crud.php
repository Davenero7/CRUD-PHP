<?php

//Los marcados con verde es el name del web (index)
	$nombre = $_POST['nombrew'];
	$apellidopaterno = $_POST['apellidopw'];
	/*
  $apellidom = $_POST['apellidomw'];
	$edad = $_POST['edadw'];
	$anio = $_POST['aniow'];
	$fecha = $_POST['fechaw'];*/

	try {

		//$conn = mysqli_connect("localhost", "root", "", "prueba");
		$PDO=new PDO('mysql:host=localhost;port=port=3306;dbname=prueba;','root','');


		//$sql = "INSERT INTO datos (nombre, apellidopaterno) VALUES ('$nombre', '$apellidopaterno')";


		 //$sql=$conn->prepare("INSERT INTO datos (nombre,apellidopaterno) VALUES ($nombre, $apellidopaterno)");

		$sql= $PDO -> prepare ("INSERT INTO datos(nombre, apellidopaterno) VALUES (:nombre , :apellidopaterno)");

 	//	$sentencia = $PDO -> prepare($sql);
 		$sql -> bindParam(':nombre', $nombre );
 		$sql -> bindParam(':apellidopaterno', $apellidopaterno );
		$sql -> execute();

	/*$sql->bindParam(':nombre',$nombre);
		$sql->bindParam(':apellidop',$apellidop);
		$sql->bindParam(':apellidom',$apellidom);
		$sql->bindParam(':edad',$edad);
		$sql->bindParam(':anio',$anio);
		$sql->bindParam(':fecha',$fecha);
		$sql->execute(); */

		echo '<script>
		alert("datos enviados con exito");
		</script>';

	} catch (PDOException $e) {
		echo 'Error' .$e->getMessage();
	}


?>
