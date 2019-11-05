<html>
<?php
	header('Content-type: text/html; charset=utf-8');
    include("conexion.php");
	
	$con=conectar();
	
	$nombre=$_GET['nombre_proyecto'];
	//echo "Proyecto: ".$nombre."<br><br>";
	$query = "SELECT * FROM proygraph.proyecto WHERE Nombre LIKE '$nombre'";
	//echo $query."<br><br>";
	$resp_mysql = $con -> query($query);	
	$resultado = mysqli_fetch_array($resp_mysql);
	
	if($resultado != NULL)
	{

		//echo "PROYECTO ENCONTRADO:<br>";
		//echo "El proyecto es: ".$resultado['Nombre']."<br>";
		//echo "El lider es: ".$resultado['Lider']."<br>";
		//echo "La descripción es: ".$resultado['Descripcion']."<br>";
		
		$query = "DELETE FROM proygraph.proyecto WHERE Nombre LIKE '$nombre'";
		$resp_mysql = $con -> query($query);
		
		if($resp_mysql)
		{
			echo "<br>Proyecto borrado con éxito";
		}
		else
			echo "Error al eliminar el proyecto, intente nuevamente.";
			echo "<br><br>".mysqli_error($con);
	}
	else
	{
		echo "No se encontró el proyecto solicitado";
		echo "<br><br>".mysqli_error($con);
	}
	
	echo "<br><br><a href=index.php>Regresar a la página de inicio</a>";
	
	
?>
</html>