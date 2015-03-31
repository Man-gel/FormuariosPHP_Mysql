<?php
  session_start();
  require_once('BaseDatos.php');
  require_once('tabla.php');
?>
 <!DOCTYPE HTML>
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title> Registros: MySql y PHP</title>
    <meta charset="UTF-8">
  </head>
  <body>
  <h3>Registros desde BD con MariaDB</h3>
  <br/>
  <br/>
  <div>
    <div>
     <a href='logout.php' >
      Cerrar sesi&oacute;n
     </a>
    </div>
    <br/>
    <div>
     <?php
      if(isset($_SESSION['usuario']))
      {
        $basedatos = new Accesos();
        $consulta = $basedatos->consultarTodo();
        $muestra = new Tabla();
        $muestra->registros=$consulta;
        $muestra->mostrarIndex();
      }
      else
      {
        session_start();
        unset($_SESSION['usuario']);
        echo "<script language='javascript'> window.location='login.php'</script>;";
      }    
     ?>
    </div>
  </div>
  </body>
 </html>
