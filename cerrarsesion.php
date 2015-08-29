<?php

    session_start();
    
    session_destroy();
    session_abort();
    
    
    $_GET['usuario'] = "";
    $_GET['contrasena'] = "";
    
    $_POST['usuario'] = "";
    $_POST['contrasena'] = "";
    
    


?>

<html>
    <head>
    <meta http-equiv='REFRESH' content='0; url= login.php' > 
    <meta http-equiv='REFRESH' content='0; url= index.php' > 
    
    </head>
</html>