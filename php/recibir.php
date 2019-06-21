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

		$conn = mysqli_connect("localhost", "root", "", "prueba");
		//$PDO=new PDO('mysql:host=localhost;port=port=3306;dbname=crudphp;','root','');
		if($conn === false){
		    die("ERROR DE CONEXION " . mysqli_connect_error());
		}

		$sql = "INSERT INTO datos (nombre, apellidopaterno) VALUES ('$nombre', '$apellidopaterno')";
		//$sql=$conn->prepare("INSERT INTO formulario (nombre,apellidop,apellidom,edad,anio,fecha) VALUES (:nombre, :apellidop, :apellidom, :edad, :anio, :fecha)");
		if(mysqli_query($conn, $sql)){
		    echo "Datos guardados correctamente";
		} else{
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	/*	$sql->bindParam(':nombre',$nombre);
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
