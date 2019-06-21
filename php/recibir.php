<?php
	$nombre = $_POST['nombre'];
	$apellidop = $_POST['apellidop'];
	$apellidom = $_POST['apellidom'];
	$edad = $_POST['edad'];
	$selects = $_POST['selects'];
	$fecha = $_POST['fecha'];

	try {

		$PDO=new PDO('mysql:host=localhost;dbname=prueba;','root','');

		$sql=$PDO->prepare("INSERT INTO formulario (nombre,apellidop,apellidom,edad,selects,fecha) VALUES (:nombre, :apellidop, :apellidom, :edad, :selects, :fecha)");

		$sql->bindParam(':nombre',$nombre);
		$sql->bindParam(':apellidop',$apellidop);
		$sql->bindParam(':apellidom',$apellidom);
		$sql->bindParam(':edad',$edad);
		$sql->bindParam(':selects',$selects);
		$sql->bindParam(':fecha',$fecha);
		$sql->execute();

		echo '<script>
		alert("datos enviados con exito");
		</script>';

		
	} catch (PDOException $e) {
		echo 'Error' .$e->getMessage();
	}

	
?>