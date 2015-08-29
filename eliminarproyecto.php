<?php

$conexion = mysql_connect("localhost", "mauricio", "mauricio");

$idProyecto = $_GET['idProyecto'];

$sql = " DELETE FROM proyectos  WHERE idProyecto = $idProyecto  ";

mysql_select_db("proyecto2", $conexion);

mysql_query($sql);

$sql2 = " DELETE FROM tareas  WHERE proyecto = '$idProyecto'  ";

mysql_query($sql2);

mysql_close();

echo" 
<html>
    <head>
    <meta http-equiv='REFRESH' content='0; url= crearproyecto.php' > 
    
    </head>
</html>


";


?>
