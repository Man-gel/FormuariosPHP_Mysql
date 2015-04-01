<?php
require_once('conexion.php');


class Accesos
{
  public function agregar($titulo,$contenido,$autor,$fecha)
  {
    try
    {
    $conexion = new Conexion();
    if(!$conexion->conectar())
    {
      throw new Exception($conexion->getError());
    }
    $insertar = "INSERT INTO `registros` ".
		"(`titulo`, `contenido`, `autor`, `fecha`) ".
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
  
  public function eliminar($id)
  {
    try
    {
    $conexion = new Conexion();
    if(!$conexion->conectar())
    {
      throw new Exception($conexion->getError());
    }
    $eliminar = "DELETE FROM `registros` WHERE `id` = '".$id."';";
		$resultado = $conexion->mysqli->query($eliminar);
		$conexion->cerrar();
		return $resultado;
    }
    catch(Exception $e)
    {
       return false;
    }
    
  }
  
  public function consultarTodo()
  {
    try
    {
    $resultado = array();
    $conexion = new Conexion();
    if(!$conexion->conectar())
    {
      throw new Exception($conexion->getError());
    }
    $todos = "SELECT * FROM registros";
    if($rst = $conexion->mysqli->query($todos))
    {
      if($rst->num_rows > 0)
      {
	while($row = $rst->fetch_assoc())
	{	
	  $resultado[] = $row;
	}
      }
    }
    $conexion->cerrar();
    return $resultado;
    }
    catch(Exception $e)
    {
       return array();
    }
    
  }

  public function consultarXcampo($valor) 
  {
    try
    {
    $resultado = array();
    $conexion = new Conexion();
    if(!$conexion->conectar())
    {
      throw new Exception($conexion->getError());
    }
    $sql = "SELECT * FROM registros WHERE `id` = '".$valor."'";
    if($rst = $conexion->mysqli->query($sql))
    {
      if($rst->num_rows > 0)
      {
	while($row = $rst->fetch_assoc())
	{	
	  $resultado[] = $row;
	}
      }
    }
    $conexion->cerrar();
    return $resultado;
    }
    catch(Exception $e)
    {
       return array();
    }
    
  }
  
  public function editarMultiple($campo,$nu_val,$id)
  {
    try
    {
    $sql = "UPDATE `registros` SET `".$campo."` = '".$nu_val."' WHERE `id` = '".$id."'";
    if($rst = $conexion->mysqli->query($sql))
    {
      if($rst->num_rows > 0)
      {
	while($row = $rst->fetch_assoc())
	{	
	  $resultado[] = $row;
	}
      }
    }
    return $resultado;
    }
    catch(Exception $e)
    {
       return array();
    }
    
  }

  public function agregarMultiple($titulo, $contenido, $autor, $fecha)
  {
    try
    {
    $insertar = "INSERT INTO `registros` ".
                "(`titulo`, `contenido`, `autor`, `fecha`) ".
                "VALUES ".
                "('".$titulo."', '".$contenido."', '".$autor."', '".date_format($fecha,"Y-m-d")."');";
                $resultado = $conexion->mysqli->query($insertar);
                return $resultado;
    }
    catch(Exception $e)
    {
       return false;
    }

  }
} 
?>
