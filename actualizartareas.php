
<html>
    <head>
        <title>Actualizar Treas</title>
    </head>
    <body>

        <?php
        
        $tarea = $_REQUEST['tarea'];
        
        $conexion = mysql_connect("localhost", "mauricio", "mauricio");

        mysql_select_db("proyecto2", $conexion);

        $sql = "SELECT * FROM tareas WHERE idTarea = $tarea ";

        $peticion = mysql_query($sql);
        
        $fila = mysql_fetch_array($peticion);
        
        $titulo = $fila['titulo'] ;$descripcion= $fila['descripcion'];
        $duracion = $fila['duracion']; $estado = $fila['duracion'];
        
    echo '   
        <form>
            
            Titulo: <input type="text" name="titulo" value='.$titulo.'  > <br>
            Descripcion: <input type="text" name="descripcion" value='.$descripcion.'  > <br>
            Duracion: <input type="text" name="duracion" value='.$duracion.'  > <br>
            Estado: <select type="text" name="estado" value='.$estado.'  > 
                         <option value="terminada" name="Terminada" >Terminada</option>
                         <option value="sinterminada" name="Sin terminada" >Sin terminar</option>
                    </select>
                
            <br><br>
            
            <input type="submit" name="enviar" value="Actualizar" >     
            
            
        </form>
        
        ';
        
        ?>
        
    </body>
</html>
