<?php


echo "Paso";

$borre = $_REQUEST['eliminar']  ;

echo $borre ;


$conexion = mysql_connect('localhost','mauricio','mauricio');

mysql_select_db('proyecto2');


$sql = 'DELETE FROM usuario WHERE idUsuario = '.$borre.' ';

mysql_query($sql);

echo" 
    <html>
          <head>
          <meta http-equiv='REFRESH' content='0; url= Usuarios.php   '    > 
    
          </head>
    </html>


";


mysql_close();


?>