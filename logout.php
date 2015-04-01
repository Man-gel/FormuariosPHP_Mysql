<?php 
  session_start();
  unset($_SESSION['usuario']);
  session_destroy();
  echo "<script language='javascript'> window.location='login.php'</script>;";
?>