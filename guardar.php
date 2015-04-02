<?php 
  session_start();
  if(!isset($_SESSION['usuario']))
  {
    echo "<script language='javascript'>window.location='login.php'</script>;";
  }
?>
<?php 
  require_once('./sysbd/BaseDatos.php');
  $titulo = $_POST['titulo'];
  $contenido = $_POST['cont'];
  $autor = $_POST['autor'];
  $fecha = $_POST['fecha'];
  var_dump($fecha);
  var_dump($contenido);
  var_dump($autor);
  var_dump($titulo);
  exit();
  exit();
  if($titulo != NULL && $contenido != NULL && $autor != NULL && $fecha != NULL)
  {
    $basedatos = new Accesos();
    $resultado = $basedatos->agregar($titulo,$contenido,$autor,$fecha);
    echo "<center><h1>".$resultado."<h1></center>";
    echo "<script language='javascript'>window.location='index.php'</script>;";
  }
  else
  {
      echo "<center><h1>NO HAY VALORES POR INGRESAR<h1></center>";
      echo "</br></br>";
      echo "<center><a href='agregar.php'>regresar</a></center>";
  }
  
?> 
