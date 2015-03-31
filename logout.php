<?php 
  session_start();
  unset($_SESSION['usuario']);
  echo "<script language='javascript'> window.location='login.php'</script>;";
?>