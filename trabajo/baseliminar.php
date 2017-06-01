<?php 
$telefono=$_GET['telefono'];
$sql = mysqli_connect("localhost", "root", "","usuarios");
	
$result = mysqli_query($sql,"Delete From usuario Where telefono='$telefono'");
while ($row=mysql_fetch_array($result))
	{echo '<option>'.$row["telefono"];}
	mysql_free_result($result);
echo '
	<script>
		alert("Eliminado Correctamente");
		window.history.go(-2);
	</script>
	';
 ?>
 