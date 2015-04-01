<?php
  //error_reporting(E_ALL);
  //ini_set('display_errors','1');
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
        <div>
            <h2>Editar Registro</h2>
            <form action="./sysbd/botones.php" method="POST">
                <label for="titulo">T&iacute;tulo</label></br>
                <input type="text" maxlength="100" name="titulo" id="titulo" value="<?php $_POST['id']?>">
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
		 $fdate = date('Y-m-d');
                 echo "<input type='text' id='fecha' readonly name='fecha'value='".$fdate."'>";
                ?>
                <br/>
                <br/>
                <input type="submit" name="agregar" Value="Agregar">
                <input type="submit" name="cancelar" Value="Cancelar">
            </form>
        </div>
    </body>
</html>

<?php
//$id = $_POST['id'];
//		$basedatos = new Accesos();
//		$consulta = $basedatos->consultarXcampo($id);
?>