<?php 
  require_once('./sysbd/BaseDatos.php');
  require_once('./sysbd/conexion.php');
  //error_reporting(E_ALL);
  //ini_set('display_errors','1');
  session_start();
  if(!isset($_SESSION['usuario']))
  {
    echo "<script language='javascript'>window.location='login.php'</script>;";
  }
  
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Iniciar Sesi&oacute;n </title>
  </head>
   <body>
   <form name='formulario' action='editar.php' method='POST'>
    <?php
      if($_POST['editar'])
      {
	$idboton = $_REQUEST['editar'];
	echo '<input type="hidden" name="idoculto" id="idoculto" value="'.$idboton.'">';
	echo "<script>document.formulario.submit()</script>";	
      }
      if($_POST['aceptar'])
      {
        $idboton = $_REQUEST['aceptar'];
        $basedatos = new Accesos();
	$resultado = $basedatos->eliminar($idboton);
	echo "<center><h2>Se han eliminado </h2>"."<h1>".$resultado."<h1>"."<h2>Registros</h2></center>";
	echo "<script language='javascript'>window.location='index.php'</script>;";
      }
      if($_POST['nuevo'])
      {
	echo "<script language='javascript'>window.location='agregar.php'</script>;";
      }
      if($_POST['cancelar'])
      {
	unset($_POST);
	echo "<script language='javascript'>window.location='index.php'</script>;";
      }
      if($_POST['eliminar'])
      {
	$idboton = $_REQUEST['eliminar'];
	echo '<input type="hidden" name="idoculto" id="idoculto" value="'.$idboton.'">';
	echo "<script>document.formulario.action='eliminar.php'</script>";
	echo "<script>document.formulario.submit()</script>";
      }
      if($_POST['agregar'])
      {
	$titulo = $_POST['titulo'];
	$contenido = $_POST['cont'];
	$autor = $_POST['autor'];
	$fecha = $_POST['fecha'];
	if($titulo != NULL && $contenido != NULL && $autor != NULL && $fecha != NULL)
	{
	  $basedatos = new Accesos();
	  $resultado = $basedatos->agregar($titulo,$contenido,$autor,$fecha);
	  echo "<center><h2>Se han agregado </h2>"."<h1>".$resultado."<h1>"."<h2>Registros</h2></center>";
	  echo "<script language='javascript'>window.location='index.php'</script>;";
	}
	else
	{
	  echo "<center><h1>NO HAY VALORES POR INGRESAR<h1></center>";
	  echo "</br></br>";
	  echo "<center><a href='agregar.php'>regresar</a></center>";
	}
      }
      if($_POST['guardar'])
      {
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$contenido = $_POST['cont'];
	$autor = $_POST['autor'];
	$fecha = $_POST['fecha'];
	$basedatos = new Accesos();
	$conexion = new Conexion();
	$conexion->conectar();
	$basedatos->editarCampo('titulo',$titulo,$id,$conexion);
	$basedatos->editarCampo('contenido',$contenido,$id,$conexion);
	$basedatos->editarCampo('autor',$autor,$id,$conexion);
	$basedatos->editarCampo('fecha',$fecha,$id,$conexion);
	$conexion->cerrar();
	echo "<script language='javascript'>window.location='index.php'</script>;";
      }
    ?>
   </form>
  </body>
</html>