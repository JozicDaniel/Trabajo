<?php 
	
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$fecha=$_POST['fecha'];
	$password=$_POST['password'];
	$rol=$_POST['rol'];
	$sql = mysqli_connect("localhost", "root", "","usuarios");
	$result = mysqli_query($sql,"UPDATE usuario SET nombre = '$nombre', email= '$email', Fecha='$fecha', password='$password',rol='$rol'  WHERE telefono = '$telefono'");
	if (! $result){
   echo 'La consulta SQL contiene errores.'.mysql_error();
   exit();
   }
   else{
	echo '
	<script>
		alert("Modificado Correctamente");
		window.history.go(-4);
	</script>
	';
    }

?>