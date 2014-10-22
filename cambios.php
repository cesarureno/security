<html>
<head><TITLE>Registro de Alumnos</TITLE></head>

<center><h2>Cambios:</h2></center>

<body>

<?
if(isset($_POST[enviar]))	
 {
	include("conexion.php"); // Conectar con MySQL

$busca=mysql_query("SELECT * FROM alumnos WHERE nombre = '$_POST[nombre]'"); //Busqueda por medio del Nombre
$nombre=$_POST["nombre"];
$row = @mysql_fetch_array($busca); //Arreglo
$nombre=$row[1];
$carrera=$row[2];
$correo=$row[3];

if(mysql_num_rows($busca))
 {   
 	$datos=mysql_fetch_row($busca);
	echo "<form name=formulario  action=cambiar.php method=POST >
		<center><b>Modifica el formulario</b><br>
		<table><tr><td>
		Nombre:</td> <td><input type=text name=nombre value=$nombre> <br></td></tr>
		<tr><td>Carrera:</td> <td><input type=text name=carrera value=$carrera> <br></td></tr>
		<tr><td>Correo:</td> <td><input type=text name=correo value=$correo> <br></td></tr>
		<tr><td><input type=submit value=enviarDatos name=enviarDatos /></td></tr>
        </form></table></center>    ";
 }
 else
 echo "No se encontro el nombre seleccionado";
  		
}

else {
?>
<center>
<form name="cambios" action="cambios.php" method="POST">
Busca el alumno por Nombre: <input type="text" name="nombre" /><br>
<input type="submit" value="enviar" name="enviar" />
</form>
</center>
<?
}
?>
</body>
</html>
