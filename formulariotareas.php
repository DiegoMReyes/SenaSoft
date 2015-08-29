<?php

session_start();

$nombre = $_GET['proyecto'];
$fase = $_REQUEST['fase'];


echo $fase;


$conexion = mysql_connect("localhost", "mauricio", "mauricio");

mysql_select_db("proyecto2", $conexion);

$sql = "SELECT * FROM tareas WHERE fase='$fase' AND proyecto='$nombre'";

$peticion = mysql_query($sql);


echo " <table border = 1 width=100%>
       <tr>
       <td>Titulo</td>
       <td>Descripcion</td>
       <td>Duracion</td>
       <td>Estado</td>

       <td></td>
       </tr>
        ";


while($fila = mysql_fetch_array($peticion)){
 
     echo "<tr>
        
           <td>".$fila['titulo']."</td> ".
          " <td> ".$fila['descripcion']." </td> ".
          " <td> ".$fila['duracion']."</td>  ".
          " <td> ".$fila['estado']."</td>  ".
             
          " </tr> ";
  
}


echo "   
<tr>
    <form action ='tareas.php' method='POST'>
        <td><input type='text' name='titulo' </td>
        <td><input type='text' name='descripcion' </td>
        <td><input type='text' name='duracion' </td>
        <td><input type='text' name='estado' </td>
        
        <td><input type='hidden' name='fase' value='$fase' </td>
        <td><input type='hidden' name='proyecto' value='$nombre'</td>



        <td><input type='submit'</td>
        <td></td>
        
</tr>
";

echo "</table>";


?>