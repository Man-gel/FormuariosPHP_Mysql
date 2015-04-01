    <?php
      session_start();
      $login = $_POST['login'];
      $contrasena = $_POST['contra'];
     
      if ($login == 'root' && $contrasena == 'admin') {
	   $_SESSION['usuario']='root';
           echo "<script language='javascript'>window.location='index.php'</script>;";
	  
      } else {
	  session_destroy();
          echo "<script language='javascript'>window.location='login.php'</script>;";
      }
    ?>
