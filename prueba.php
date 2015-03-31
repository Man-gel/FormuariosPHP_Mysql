<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
require_once('BaseDatos.php');
require_once('tabla.php');
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Ejemplo de PHP y MySQL</title>
<meta charset="UTF-8"> 
</head>
<body>
<h1>Mostrar los elementos</h1>
<?php
$modelo = new Accesos();
$contactos = $modelo->consultarTodo();
$listar = new Tabla();
$listar->registros = $contactos;
$listar->mostrarIndex();
?>
</body>
</html>
