
<h2>Fases</h2>

<?php

session_start();

$uno = 1;
$dos = 2;
$tres = 3;
$cuatro = 4;
$cinco = 5;

$nombre = $_GET['proyecto'];

$_SESSION['proyecto'] = $nombre;

echo " 
    

<table border= '1px'>

<tr>

<tr><td> Fases del proyecto ".$nombre."  </td></tr>
<tr><td>   </td>
<tr><td> <a href='formulariotareas.php?fase=".$uno." &proyecto=".$nombre." '>Analisis De Requerimientos</a> </td>
<tr><td> <a href='formulariotareas.php?fase=".$dos." &proyecto=".$nombre." '>Diseño</a> </td>
<tr><td> <a href='formulariotareas.php?fase=".$tres." &proyecto=".$nombre." '>Construccion</a> </td>
<tr><td> <a href='formulariotareas.php?fase=".$cuatro." &proyecto=".$nombre." '>Pruebas</a> </td>
<tr><td> <a href='formulariotareas.php?fase=".$cinco." &proyecto=".$nombre."'>Implementacion</a> </td>


<tr>
</table>

";





?>