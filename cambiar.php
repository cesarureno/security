<html>
<head><TITLE>Registro de Alumnos</TITLE></head>
<center><h2>Cambios:</h2></center>

<body>
<?php
if (isset($_POST[enviarDatos]))
{
include("conexion.php"); //Archivo para conectar con MySQL

mysql_query("UPDATE alumnos SET nombre='{$_POST['nombre']}', carrera='{$_POST['carrera']}', correo='{$_POST['correo']}' WHERE nombre = '$_POST[nombre]'");

}
?>
<center>Los cambios se han realizado satisfactoriamente<br>
<a href="index.php">Volver</a></center>
</body>
</html>
  
 
