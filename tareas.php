<?php


$fase = $_POST['fase'];
$proyecto = $_POST['proyecto'];

$addtitulo = $_POST['titulo'];
$adddescripcion = $_POST['descripcion'];
$addduracion = $_POST['duracion'];
$addestado = $_POST['estado'];


$conexion = mysql_connect("localhost", "mauricio", "mauricio");

mysql_select_db("proyecto2", $conexion);


$sql = "INSERT INTO tareas (titulo, descripcion,  duracion, estado, fase , proyecto)
        VALUES ('$addtitulo','$adddescripcion','$addduracion','$addestado', '$fase' , '$proyecto')";

mysql_query($sql);



mysql_close();

echo " 

<html>
    <head>
    <meta http-equiv='REFRESH' content='0; url= formulariotareas.php?fase=".$fase." &proyecto=".$proyecto." ' > 
    
    </head>
</html> ";


?>