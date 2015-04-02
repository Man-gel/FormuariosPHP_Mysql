<?php 
  session_start();
  if(!isset($_SESSION['usuario']))
  {
    echo "<script language='javascript'>window.location='login.php'</script>;";
  }
?>

<!DOCTYPE HTML>
<html>
  <head>
     <title>Agregar nuevo registro</title>
 </head>
     <body>
         <div>
          <center>
            <h2>Nuevo Registro</h2>
            <form name="form1" action="botones.php" method="POST">
                <label for="titulo">T&iacute;tulo</label></br>
                <input type="text" maxlength="100" name="titulo" id="titulo">
                </br>
                </br>
                <label for="cont">Contenido</label></br>
                <textarea name="cont" id="cont" rows="15" cols="25"></textarea>
                </br>
                </br>
                <label for="autor">Autor</label></br>
                <input type="text" maxlength="100" name="autor" id="autor">
                </br>
                </br>
                <label for='fecha'>Fecha</label></br>
                <?php
		 date_default_timezone_set('America/Mexico_City');
		 $fdate = date('Y-m-d');
                 echo "<input type='text' id='fecha' name='fecha' value='".$fdate."'>";
                ?>
                <br/>
                <br/>
                <input type="submit" name="agregar" value="Agregar">
                <input type="submit" name="cancelar" value="Cancelar">
            </form>
            </center>
        </div>
    </body>
</html>
