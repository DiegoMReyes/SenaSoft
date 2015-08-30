

<?php

session_start();

$usuario1 = $_POST['usuario'];
$contrasena1 = $_POST['contrasena'];

$_SESSION['usuario'] = $usuario1;
$_SESSION['contrasena'] = $contrasena1;


$usuario = $_SESSION['usuario'] ;
$contrasena = $_SESSION['contrasena'];



$conexion = mysql_connect("localhost", "mauricio", "mauricio");

mysql_select_db("proyecto2", $conexion);

$sql = "SELECT * FROM usuario";

$resultado = mysql_query($sql);


while($fila = mysql_fetch_array($resultado)){
    
    $usuarios = $fila['usuario'];
    $contrasenas = $fila['contrasena'];
    $permisos = $fila['permisos'];
    
    if( $usuarios==$usuario &&  $contrasenas==$contrasena && $permisos== 10){//administrador
        
        $nombre = $fila['nombre'];
        
        $_GET['nombre'] = $nombre; 
        $_POST['usuario'] = $usuario;
        $_POST['contrasena'] = $contrasena;
        
        $_SESSION['permisos'] = $fila['permisos'] ;
        
        voyA("crearproyecto.php");

     }
     
     if( $usuarios==$usuario &&  $contrasenas==$contrasena && $permisos== 5){//jefe de proyecto
         
        $_POST['usuario'] = $usuario;
        $_POST['contrasena'] = $contrasena;
         
         voyA("proyectosadministrador.php");
         
     }
     
 
     if( $usuarios==$usuario &&  $contrasenas==$contrasena && $permisos== 1){//analista
        
        $nombre = $fila['nombre'];
        
        $_GET['nombre'] = $nombre;
        
        $_POST['usuario'] = $usuario;
        $_POST['contrasena'] = $contrasena;
        
        voyA("fases.php ");

     }
     
}

function voyA($irA) {
    
    echo" 
    <html>
          <head>
          <meta http-equiv='REFRESH' content='0; url= $irA'  > 
    
          </head>
    </html>


";
    
}

echo 'No tienes un usuario o escribiste mal';


?>