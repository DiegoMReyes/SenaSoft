
<?php

    class conection{
        
        function conectar($sql){
            
           $conexion = mysql_connect('localhost','mauricio','mauricio'); 
            
           
            mysql_select_db("proyecto2", $conexion);

            mysql_query($sql); 
           
           
        }
        
    }        
        
        
?>