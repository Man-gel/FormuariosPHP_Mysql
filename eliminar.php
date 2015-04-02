<?php
  //error_reporting(E_ALL);
  //ini_set('display_errors','1');
  session_start();
  if(!isset($_SESSION['usuario']))
  {
    echo "<script language='javascript'>window.location='login.php'</script>;";
  }
  require_once('./sysbd/BaseDatos.php');
?>

<html>
  <head>
  </head>
  <body>
   <form name="form" action="botones.php" method='POST'>
    <?php
    $id = $_POST['idoculto'];
    echo "<center><h2>¿Esta seguro que quiere eliminar este registro?</h2></center>";
    echo "</br></br>";    
    echo "<center><button type='submit' name='aceptar' value='".$id."'>Aceptar</button>"."<input type='submit' name='cancelar' value='Cancelar'></center>";
    echo "<input type='hidden' name='eliminar' value='".$id."' id='eliminar'>";
    ?>    
   </form>
 </body>
</html>