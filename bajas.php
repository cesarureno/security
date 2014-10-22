<html>
<head>
	<TITLE>Registro de Alumnos</TITLE>
</head>

<center><h2>Bajas:</h2></center>

<body>
<br>
<?php
include("conexion.php"); //Archivo de Conexión con Mysql

$consulta = mysql_query("SELECT * FROM `alumnos`"); 
?>
<center>
	<table border=1  cellspacing=1 cellpadding=1>
      	<TR>
      		<TD><B>Nombre</B></TD> 
      		<TD><B>Carrera</B></TD> 
      		<TD><B>Correo</B></TD> 
			<TD><B>Borrar</B></TD>
		</TR>
	<a href="index.php">Volver</a>
</center>
<?php

   while($row = mysql_fetch_array($consulta)) 
   {
       
      printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td><a href=\"borra.php?id=%d\">Borrar</a></td></tr>", $row["nombre"],$row["carrera"],$row["correo"],$row["id"]);
   } 
   mysql_free_result($consulta);
 
?>


</body>
</html>
