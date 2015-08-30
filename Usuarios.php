<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuarios</title>
    </head>
    <body>
    <center><br><br>
        <?php
               
            
            $conexion = mysql_connect('localhost','mauricio','mauricio');
            
            mysql_select_db('proyecto2');
            
            $sql = 5;      
            tabla($sql, "Jefes");
            
            $sql = 1;      
            tabla($sql , "Analistas");

            
   
function tabla ($sql , $cargo) {
     
    $sqlw = ' SELECT * FROM usuario WHERE permisos= '.$sql.'  '; 
    $peticion = mysql_query($sqlw);
    
 echo '  
        
        <h3>   '. $cargo .' </h3>
        
  
    <table border="1px">
        
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>E-mail</td>
            <td>Numero</td>
            <td>Direccion</td>
            <td>Fecha De Nacimiento</td>
            
        </tr>';
            

            
            while( $fila = mysql_fetch_array($peticion)){
                
                echo ' 
                   <tr>
                        <td>'.$fila['nombre'].'</td>
                        <td>'.$fila['apellido'].'</td>
                        <td>'.$fila['email'].'</td>
                        <td>'.$fila['numero'].'</td>
                        <td>'.$fila['direccion'].'</td>
                        <td>'.$fila['fecha'].'</td>
                        

                        <td><a href="eliminarusuario.php?eliminar='.$fila['idUsuario'].'" >Despedir</a></td>


                    </tr>
                ';
                
            }
            
            
        
        
    echo "     
    </table> <br><br>  "; 
        
    
   }     
 
        
 ?>
 
    </body>
</html>
