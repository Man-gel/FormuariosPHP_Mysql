<?php 
session_start();
$_SESSION['usuario'] = 'root';
echo "<script language='javascript'> window.location='index.php'</script>;";
?>