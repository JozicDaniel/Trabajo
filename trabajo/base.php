<?php 

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$fecha=$_POST['fecha'];
$password=$_POST['password'];
$rol=$_POST['rol'];
   $sql = mysqli_connect("localhost", "root", "","usuarios");
   $nuevo_telefono=mysqli_query($sql,"SELECT telefono FROM usuario WHERE telefono='$telefono'");
	if(mysqli_num_rows($nuevo_telefono)>0)
	{
	echo "
	<p class='avisos'>La direccion de e-mail ya esta registrada</p>
	<p class='Subm'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p>
	"; 
	exit;
	}
   $result = mysqli_query($sql,"INSERT INTO usuario (nombre, email, telefono,fecha,password,rol) VALUES ('$nombre', '$email', '$telefono', '$fecha','$password','$rol')");
 echo '
	<script>
		alert("Insertados Correctamente");
		window.history.go(-2);
	</script>
	';

?> 
