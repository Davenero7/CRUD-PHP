<?php

//Los marcados con amarillos es el name del web (index)
	$nombre = $_POST['nombrew'];
	$apellidop = $_POST['apellidopw'];
	$apellidom = $_POST['apellidomw'];
	$edad = $_POST['edadw'];
	$anio = $_POST['aniow'];
	$fecha = $_POST['fechaw'];

	try {

		$PDO=new PDO('mysql:host=localhost;port=port=3306;dbname=crudphp;','root','');

		$sql=$PDO->prepare("INSERT INTO formulario (nombre,apellidop,apellidom,edad,anio,fecha) VALUES (:nombre, :apellidop, :apellidom, :edad, :anio, :fecha)");

		$sql->bindParam(':nombre',$nombre);
		$sql->bindParam(':apellidop',$apellidop);
		$sql->bindParam(':apellidom',$apellidom);
		$sql->bindParam(':edad',$edad);
		$sql->bindParam(':anio',$anio);
		$sql->bindParam(':fecha',$fecha);
		$sql->execute();

		echo '<script>
		alert("datos enviados con exito");
		</script>';

		
	} catch (PDOException $e) {
		echo 'Error' .$e->getMessage();
	}

	
?>