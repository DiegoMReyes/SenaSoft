
<html>
    <head>
        <title>Actualizar Proyecto</title>
    </head>
    <body>

    <center><br><br>
        <table border='1px'>
         
            
        <?php    
        
        $id = $_GET['proyecto'];
        
        
        $conexion = mysql_connect('localhost','mauricio','mauricio');
        
        mysql_select_db('proyecto2');
        
        
        $sql = " SELECT * FROM proyectos WHERE idProyecto = $id  ";
        
        $peticion = mysql_query($sql);
        
        $fila = mysql_fetch_array($peticion);
            
        
        echo " 
        
            <form "; entre();  echo ">
        
            <input type='hidden' name='id' value='$id'  >
            <tr>
                <td>Titulo</td>
                <td><input type='text' name='titulo' value=".$fila['titulo']."  ></td>
            </tr>  
            
            <tr>
                <td>Descripcion</td>
                <td>".$fila['descripcion']."</td>
            </tr>  
            
            <tr>
                <td>Objetivo Principal</td>
                <td>".$fila['objetivo']."</td>
            </tr> 
            
            <tr>
                <td>Duracion </td>
                <td> <input type='text' name='duracion' value= ".$fila['duracion']." size='1px' >Semanas</td>
            </tr> ";
        
        
        $idU = $fila['jefe'];
        
        $sql2 = " SELECT * FROM usuario WHERE idUsuario = $idU  ";
        
        $peticion2 = mysql_query($sql2);
        
        $filaU = mysql_fetch_array($peticion2); 
        
        
        
    echo "         
            <tr>
                <td>Jefe De Proyecto </td>
                

                <td><select name='jefe'>
                    <option value='".$filaU['idUsuario']."'>".$filaU['nombre']." ".$filaU['apellido']."</option> "; 
    

$sq = "SELECT * FROM usuario WHERE permisos = 5 ";

$peticio = mysql_query($sq);


while($fila2 = mysql_fetch_array($peticio)){
      
        $nomjefe = $fila2['nombre'];
        $apejefe = $fila2['apellido'];
        $idJefe = $fila2['idUsuario']; 
            
        echo " <option value='$idJefe'>".$nomjefe." ".$apejefe."</option> ";
            
            
}


    echo  " </select> </td></tr>
            
            </table>

            <br><br>
            <input type='submit' name='actualizar' value='Actualizar'>
            </form>  
        
        ";
            
          
        function entre(){
        
        if(isset($_REQUEST['actualizar'])){
           
             
            $id = $_REQUEST['id'];
            $titulo = $_REQUEST['titulo'];
            $duracion = $_REQUEST['duracion'];
            $idJefe = $_REQUEST['jefe']; 
            
            $sqlM = "UPDATE proyectos SET titulo='$titulo' , duracion= '$duracion' , jefe=$idJefe WHERE idProyecto = $id";
            
            mysql_query($sqlM);
            
            
            echo" 
    <html>
          <head>
          <meta http-equiv='REFRESH' content='0; url= crearproyecto.php'  > 
    
          </head>
    </html>


";
            
            
            
        }
        
        }
        
         mysql_close(); 
        
        ?>   
  
        
    </body>
</html>


