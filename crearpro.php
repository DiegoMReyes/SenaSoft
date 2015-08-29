<?php

session_start();

$addtitulo = $_POST['titulo'];
$adddescripcion = $_POST['descripcion'];
$addobjetivo = $_POST['objetivo'];
$addfecha = $_POST['fecha'];
$addduracion= $_POST['duracion'];
$addjefe= $_POST['jefe'];



$conexion = mysql_connect("localhost", "mauricio", "mauricio");

mysql_select_db("proyecto2", $conexion);


$sql = "INSERT INTO proyectos (titulo, descripcion, objetivo, fecha, duracion, jefe)
        VALUES ('$addtitulo','$adddescripcion','$addobjetivo','$addfecha','$addduracion','$addjefe')";

mysql_query($sql);



mysql_close();


echo" 
<html>
    <head>
    <meta http-equiv='REFRESH' content='0; url= crearproyecto.php' > 
    
    </head>
</html>


";
?>