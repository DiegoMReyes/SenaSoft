
<!DOCTYPE html>

<html>
    <head>
        <title>Administrador</title>
    </head>
    <body>






<center>

<h2>Administrador</h2>

<p><a href="cerrarsesion.php?usuario='' &contrasena='' ">Cerrar sesion</a></p>



<?php


session_start();


if(!empty($_SESSION['usuario'] )){
        

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


if($usuario == 'diego' ){


$conexion = mysql_connect("localhost", "mauricio", "mauricio");

if(!$conexion){
    
    die("No se ha podido conectar: ".  mysql_error());
    
}

mysql_select_db("proyecto2", $conexion);

$sql = "SELECT * FROM proyectos ";

$peticion = mysql_query($sql);


echo " <table border = 1 width=100%>
       <tr>

       
       <td>Titulo</td>
       <td>Descripcion</td>
       <td>Objetivo</td>
       <td>Fecha</td>
       <td>Duracion</td>
       <td>Jefe De Proyecto</td>
       <td>Eliminar </td>
       <td>Ver Fases</td>
       <td> Actualizar </td>
       </tr>
        ";



while($fila = mysql_fetch_array($peticion)){
    
    $nomape = $fila['jefe'];

    
    
    
    $sql2 = "SELECT * FROM usuario WHERE idUsuario=$nomape ";

    $peticion3 = mysql_query($sql2);
    
    $fila3 = mysql_fetch_array($peticion3);
    
    $fin = $fila3['nombre'] ;
    $finap = $fila3['apellido'];
    
   
    
     echo "<tr>
        
           
           <td>".$fila['titulo']."</td> ".
          " <td> ".$fila['descripcion']." </td> ".
          " <td> ".$fila['objetivo']."</td> ".
          " <td> ".$fila['fecha']."</td>  ".
          " <td> ".$fila['duracion']."</td>  ".
          " <td> ".$fin ." ".$finap  .
             
             
          " <td><a href='eliminarproyecto.php?idProyecto=".$fila['idProyecto']."
           '>Eliminar</a></td>".  
            
          "<td><a href='fases.php?proyecto=".$fila['idProyecto']."' > Ver Fases</a></td>".
             
          "<td><a href='ActualizarProyecto.php?proyecto=".$fila['idProyecto']."' >Actualizar</a></td>".
             
         " </tr> ";
    
}


echo "
<tr>
    <form action ='crearpro.php' method='POST'>

        <td><input type='text' name='titulo' </td>
        <td><input type='text' name='descripcion' </td>
        <td><input type='text' name='objetivo' </td>
        <td><input type='date' name='fecha' </td>
        <td><input type='text' name='duracion' </td>
        <td><select name='jefe'>   ";
   


$sql2 = "SELECT * FROM usuario WHERE permisos = 5 ";

$peticion2 = mysql_query($sql2);


while($fila2 = mysql_fetch_array($peticion2)){
      
        $nomjefe = $fila2['nombre'];
        $apejefe = $fila2['apellido'];
        $idJefe = $fila2['idUsuario']; 
            
        echo " <option value='$idJefe'>".$nomjefe." ".$apejefe."</option> ";
            
            
}

echo " 
        </td>
        <td><input type='submit'</td>
        
        <td></td>
        
</tr>


    </table>";


echo $nomjefe;

mysql_close();

$analista = 1;
$jefe = 5;

echo " 

<br><br><br>

<h3>Contratar Nuevo Empleado</h3>
<table border='1px'>
    
    <tr><td><a href='contrataranalista.php?permisos=".$jefe." '>Contratar Jefe</a></td></tr>
    <tr><td><a href='contrataranalista.php?permisos=".$analista." '>Contratar Analista</a></td></tr>

    
</table>


";

}
}

?>

</center>

    <br><br>
    
<table border='1px'>
    
    <tr>
        <td>MENU</td>   </tr><tr>
        <td><a href='Usuarios.php'>Ver usuarios</a></td>
    
    
    </tr>
    
    
</table>



 </body>
</html>
