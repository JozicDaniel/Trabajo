<?php 
$telefono=$_GET['telefono'];
$sql = mysql_connect("localhost", "root", "");
mysql_select_db("usuarios", $sql); 
 $que="SELECT * FROM usuario WHERE telefono='$telefono'";
 $result=mysql_query($que);
 if(!$result){
echo 'La consulta SQL contiene errores.'.mysql_error();
   exit();
 }


$row = mysql_fetch_assoc($result);
  echo '<tbody>';
  echo '<h1>Modifica los Datos deseados</h1>';
  echo '<form method="post" action="basemodificar.php">';
  echo ' <p>Su nombre: <input type="text" name="nombre" value="'.$row['nombre'].'" /></p>';
  echo ' <p>Su e-mail: <input type="text" name="email" value="'.$row['email'].'"/></p> ';
  echo ' <p>Su telefono: <input type="text" name="telefono" value='.$row['telefono'].' readonly="readonly"/></p> ';
  echo ' <p>Su fecha: <input type="text" name="fecha" value="'.$row['Fecha'].'"/></p> ';
  echo ' <p>Su password: <input type="text" name="password" value="'.$row['password'].'"/></p> ';
  echo ' <p>Su rol: <input type="text" name="rol" value="'.$row['rol'].'"/></p> ';
  echo '<br><br>';
  echo ' <input type="submit" name="Modificar" value ="Modificar"  >';

 

 	?>