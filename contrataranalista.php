

<form method="POST"  action="nuevoempleado.php" >
         
        
        Nombre: <input type="text" name="nombre" required/> <br>
        Apellido: <input type="text" name="apellido" required /> <br>
        Documento: <input type="number" name="documento" required/> <br>
        Fecha De Nacimiento: <input type="date" name="fecha" required /> <br>
        E-mail: <input type="email" name="email" required/> <br>
        Numero: <input type="text" name="numero" required/> <br>
        Direccion: <input type="text" name="direccion" required/> <br>
    


           <br>
            <h4>Recuerda Crearle Un usuario y una contraseña</h4>
            
            <br>
            
            
         <?php
 
         $permisos = $_GET['permisos'];
 
         $_POST['permisos'] = $permisos;
            
         echo "  <input type='hidden' name='permisos' value='$permisos'/> <br>";
       
          ?>

                   
        Usuario: <input type='text' name='usuarioN' required/> <br>
        Contraseña: <input type='password' name='contrasenaN' required /> <br>
        Confirmar Contraseña <input type='password' name='contrasenacon' required /> <br>
    
        <input type='submit' name='cuenta' value='Crear Cuenta'  />
        
        </form>

    
