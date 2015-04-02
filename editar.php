<?php
  error_reporting(E_ALL);
  ini_set('display_errors','1');
  session_start();
  if(!isset($_SESSION['usuario']))
  {
    echo "<script language='javascript'>window.location='login.php'</script>;";
  }
  require_once('./sysbd/BaseDatos.php');
?>
<html>
    <head>
     <title>Editar registro</title>
    </head>
    <body>
    <?php 
    $id = $_POST['idoculto'];
    $basedatos = new Accesos();
    $fila = $basedatos->consultarXid($id);
    foreach($fila as $campo)
    {
      $titulo = $campo['titulo'];
      $contenido = $campo['contenido'];
      $autor = $campo['autor'];
    }
    ?>
        <div>
          <center>
            <h2>Editar Registro</h2>
            <form action="botones.php" method="POST">
                <label for="titulo">T&iacute;tulo</label></br>
                <input type="text" maxlength="100" name="titulo" id="titulo" value="<?php echo $titulo;?>">
                </br>
                </br>
                <label for="cont">Contenido</label></br>
                <textarea name="cont" id="cont" rows="15" cols="25"><?php echo $contenido;?></textarea>
                </br>
                </br>
                <label for="autor">Autor</label></br>
                <input type="text" maxlength="100" name="autor" id="autor" value="<?php echo $autor;?>">
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
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="submit" name="guardar" value="Guardar">
                <input type="submit" name="cancelar" value="Cancelar">
            </form>
           </center>
        </div>
    </body>
</html>