<html>
<head>
	<TITLE>Registro de Alumnos</TITLE>
</head>
<center><h2>Registro:</h2></center>
<body>

<?
include("funciones.php"); //Se incluye el archivo funciones.php donde se encuentran las validaciones del e-mail y número de control.

if(isset($_POST[enviar])) //Si el botón enviar es pulsado, hacer lo siguiente:
{
include("conexion.php"); //Se incluye el archivo conexion.php para conectar con MySQL.

//Pase de variables.
  $nombre=$_POST["nombre"]; 
  $carrera=$_POST["carrera"];
  $correo=$_POST["correo"];


if($nombre=="") //validaciones
	echo "Ingresa un nombre<br>"; 
else
   	if(!comprobar_email($correo)) //validación del correo electrónico
     	echo "El mail <b>$correo</b> es incorrecto<br>";
   	else
  	{
  		$sql= "INSERT INTO alumnos (id , nombre , carrera , correo) VALUES ('', '$nombre', '$carrera', '$correo');";  //se insertan los datos en una variable llamada sql.
	}

if(!mysql_query($sql))  //la variable se ingresa a la función mysql_query que esta es la que inserta a la base de datos.
	echo "No se pudieron registrar los datos";
else
	echo "<center>El registro se ha realizado satisfactoriamente<br><br> <b>Nombre:</b>".$nombre." <br> <b>Carrera:</b>".$carrera."<br> <b>Correo:</b>".$correo."";
  
?>

<br><br>
<a href="index.php">Volver</a></center>
<? 
}
else
{
 ?>

<center>
<form name="alumnos" action="altas.php" method="POST">
	<table>
  		<tbody>
    		<tr>
      			<td>Nombre:</td>
      			<td><input type="text" name="nombre" /></td>
    		</tr>
    		<tr>
      			<td>Carrera:</td>
      			<td><select name="carrera">
         				<option>Ing. Computacion Inteligente
						<option>Ing. Sistemas Computacionales
						<option>Ing. Civil
        				<option>Ing. Electronica
						<option>Ing. Industrial
						<option>Ing. Quimica
          			</select>
          		</td>
    		</tr>
    		<tr>
      			<td>Correo:</td>
      			<td><input type="text" name="correo" /></td>
    		</tr>
   			<tr>
   				<td><input type="submit" value="enviar" name="enviar" /></TD>
   				<td><input type="reset" value="borrar"/></td>
			</tr>
  		</tbody>
	</table>
</form>
<a href="index.php">Volver</a></center>
<?
}
?>
</body>
</html>
