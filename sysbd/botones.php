<?php 
  error_reporting(E_ALL);
  ini_set('display_errors','1');
  session_start();
  if(!isset($_SESSION['usuario']))
  {
    echo "<script language='javascript'>window.location='login.php'</script>;";
  }
?>
<html>
 <body>
 <?php 
  if($_POST['editar'])
  {
    echo "<form action='editar.php' method='POST'>".
	  '<input type="hidden" name="id" id="id" value="'.$_POST['id'].'">'.
	  "</form>";
    echo "<script language='javascript'>window.location='../editar.php'</script>;";
    return;
  }
  if($_POST['eliminar'])
  {
    echo "<script language='javascript'>window.location='../eliminar.php'</script>;";
  }
  if($_POST['nuevo'])
  {
    echo "<script language='javascript'>window.location='../agregar.php'</script>;";
  }
  if($_POST['cancelar'])
  {
    echo "<script language='javascript'>window.location='../index.php'</script>;";
  }
  if($_POST['agregar'])
  {
    echo "<script language='javascript'>window.location='../guardar.php'</script>;";
  }
  ?>
 </body>
</html>