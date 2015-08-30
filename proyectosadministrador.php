
<center>

<h2>Jefe Proyectos</h2>


<p><a href="cerrarsesion.php?usuario='' &contrasena='' ">Cerrar sesion</a></p>

<?php


session_start();


$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


if(!empty($_SESSION['usuario'] )){


$conexion = mysql_connect("localhost", "mauricio", "mauricio");

mysql_select_db("proyecto2", $conexion);

$sql1 = "SELECT idUsuario FROM usuario WHERE usuario = '$usuario' AND contrasena = '$contrasena' ";

$peticion1 = mysql_query($sql1);


while($fila = mysql_fetch_array($peticion1)){

        $idUsuario = $fila['idUsuario'];
    
}

$sql = "SELECT * FROM proyectos WHERE jefe='$idUsuario' ";


$peticion = mysql_query($sql);



echo " <table border = 1 width=100%>
       <tr>
       <td>Titulo</td>
       <td>Descripcion</td>
       <td>Objetivo</td>
       <td>Fecha</td>
       <td>Duracion</td>
       <td></td>
       <td></td>
       </tr>      
        ";


while($fila = mysql_fetch_array($peticion)){
     echo "<tr>
        
           <td>".$fila['titulo']."</td> ".
          " <td> ".$fila['descripcion']." </td> ".
          " <td> ".$fila['objetivo']."</td> ".
          " <td> ".$fila['fecha']."</td>  ".
          " <td> ".$fila['duracion']."</td>  ".

           " <td><a href='formulariotareas.php?
           titulo=".$fila['titulo']."
           &direccion=".$fila['descripcion']."
           &categoria=".$fila['objetivo']."
           &comentario=".$fila['fecha']."
           &valoracion=".$fila['duracion']."
         '>Asignar Tarea</a></td>".  
             
             
           "<td><a href='fases.php?proyecto=".$fila['idProyecto']."' >
           Ver Fases <a/></td>  " .  
             
              
           " </tr> ";
     
}

echo "</table>";

mysql_close();

}

?>



