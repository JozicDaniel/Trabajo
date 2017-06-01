<?php
$nombre=$_POST['nombre'];
 $sql = mysql_connect("localhost", "root", "");
 mysql_select_db("usuarios", $sql); 
 $que = "SELECT * FROM usuario WHERE nombre='$nombre'";
$result=mysql_query($que);
if (! $result){
   echo 'La consulta SQL contiene errores.'.mysql_error();
   exit();
}else {
    echo '<h1>Usuarios encontrados</h1>';
    echo '<table border=’2’><tr><th>Nombre</th><th>E-mail</th><th>Telefono</th><th>Fecha</th><th>Password</th><th>Rol</th>
         </tr><tr>';
    while ($row = mysql_fetch_assoc($result)){

          echo "<tbody>";

          echo "<tr class='row0' onMouseOver=this.style.backgroundColor='yellow'; style='cursor:pointer;' onMouseOut=this.style.backgroundColor=''; alert(this.getElementsByTagName('td')[0].innerHTML);'>";
          echo '<h1>Usuarios Encontrados</h1><br>';
          echo '<h4>Selecciona un boton dependiendo de lo que desear realizar </h4><br>';
          echo "<td>".$row['nombre']."</td>";
          echo "<td>".$row['email']."</td>";
          echo "<td>".$row['telefono']."</td>";
          echo "<td>".$row['Fecha']."</td>";
          echo "<td>".$row['password']."</td>";
          echo "<td>".$row['rol']."</td>";
          echo '<form action="baseliminar.php ?telefono='.$row['telefono'].'" method="post">
          <td><input type="submit" name="eliminar" value ="Eliminar"></td>
                </form>';
           echo '<form action="basemod.php ?telefono='.$row['telefono'].'" method="post">
          <td><input type="submit" name="odificar" value ="Modificar"></td>
                </form>';
          echo "</tr>";
          echo "</tbody>";
         


   }
   echo '</tr></table>';
 }
echo '
<br>
<form action="Index.html" method="post">
<input type="submit" name="grabar" value ="volver">
</form>';

?> 