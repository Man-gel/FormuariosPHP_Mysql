<?php
require_once('conexion.php');

class Accesos
{
  public function agregar($titulo,$contenido,$autor,$fecha)
  {
    try
    {
    $conexion = new Conexion()
    if(conexion->conectar())
    {
      throw new Exception($conexion->getError());
    }
    $insertar = "INSERT INTO `contacto` ".
		"(`titulo`, `contenido`, `autor`, `fecha`, `colonia`) ".
		"VALUES ".
		"('".$titulo."', '".$contenido."', '".$autor."', '".date_format($fecha,"Y-m-d")."');";
		$resultado = $conexion->mysqli->query($insertar);
		$conexion->cerrar();
		return $resultado;
    }
    catch(Exception $e)
    {
       return false;
    }
    
  }
  
 
?>
