<?php 
  error_reporting(E_ALL);
  ini_set('display_errors','1');
  
  if(!isset($_SESSION['usuario']))
  {
    echo "<script language='javascript'>window.location='login.php'</script>;";
  }
?>
<script type='text/javascript'>
      function confirmacion()
      {
	if(!confirm('¿Seguro que desea eliminar este registro?')){
	  echo
	  window.location='index.php';
	}
      }
    </script>     
<?php 
  class Tabla
  {
    public $registros;        
    public function mostrarIndex()
    {
    echo "<form name='formulario' action='botones.php' method='POST'>";
    echo ' <table border="1">';
    echo '  <tr>';
    echo '   <th>ID</th>';
    echo '   <th>T&iacute;tulo</th>';
    echo '   <th>Contenido</th>';
    echo '   <th>Autor</th>';
    echo '   <th>Fecha</th>';
    echo '   <th>Opciones</th> ';
    echo '  </tr>';
    foreach ($this->registros as $registro)
    {
      $id = $registro['id'];
      $titulo = $registro['titulo'];
      $contenido = $registro['contenido'];
      $autor = $registro['autor'];
      $fecha = $registro['fecha'];
      echo "\n";
      echo ' <tr>';
      echo '  <td>'.$id.'</td>';
      echo '  <td>'.$titulo.'</td>';
      echo '  <td>'.$contenido.'</td>';
      echo '  <td>'.$autor.'</td>';
      echo '  <td>'.$fecha.'</td>';
      echo '  <td> '."<button type='submit' name='editar' value='".$id."'>Editar</button>".
		     "<button type='submit' name='eliminar' value='".$id."'>Eliminar</button>";
      echo '  </td>';
      echo ' </tr>';
    }
    echo '</table><br/>';
    echo "<input type='submit' name='nuevo' value='NUEVO'>";
    echo "</form>";
   }
    
  }
?>
