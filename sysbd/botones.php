<?php 
  session_start();
  if(!isset($_SESSION['usuario']))
  {
    echo "<script language='javascript'>window.location='login.php'</script>;";
  }
?>
<?php 
if($_POST[nuevo])
{
  echo "<script language='javascript'>window.location='agregar.php'</script>;";
}
if($_POST[editar])
{

}
if($_POST[eliminar])
{

}
if($_POST[cancelar])
{
  echo "<script language='javascript'>window.location='index.php'</script>;";
}
if($_POST[agregar])
{
  echo "<script language='javascript'>window.location='guardar.php'</script>;";
}
?>