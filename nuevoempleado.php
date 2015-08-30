<?php

    $usuario = $_POST['usuarioN'];
    $contrasena = $_POST['contrasena'];
    $comprobarcontra = $_POST['contrasenacon'];
 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $fecha = $_POST['fecha'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $direccion = $_POST['direccion'];
    
    $permisos = $_POST['permisos'];
    
    
    
    
$conexion = mysql_connect("localhost", "mauricio", "mauricio");

mysql_select_db("proyecto2", $conexion);


$sql1 = "SELECT * FROM usuario" ;

$peticion4 = mysql_query($sql1);

$contador = 0;
while($fila = mysql_fetch_array($peticion4)){
    
    if($usuario==$fila['usuario'] ){
        
        $contador++;
        
    }
    
}

if($contador == 0){

$sql = "INSERT INTO usuario (usuario, contrasena, permisos, documento,nombre, apellido, fecha, email, numero, direccion)
        VALUES ('$usuario','$contrasena',$permisos,'$documento','$nombre','$apellido','$fecha','$email', '$numero' , '$direccion' )";

mysql_query($sql);


mysql_close();


}else{echo "Usuario ya existente";}
    



?>