<?php 
  class Tabla
  {
    public $registros;
    public function mostrarIndex()
    {
    echo '<table>';
     echo '<tr>';
      echo '<th>ID</th>';
      echo '<th>T&iacute;tulo</th>';
      echo '<th>Contenido</th>';
      echo '<th>Autor</th>';
      echo '<th>Fecha</th>';
      echo '<th>Opciones</th> ';
     echo '</tr>';
    foreach ($this->registros as $registro)
    {
    echo '<tr>';
     echo '<td>'.$registro['id'].'</td>';
     echo '<td>'.$registro['titulo'].'</td>';
     echo '<td>'.$registro['contenido'].'</td>';
     echo '<td>'.$registro['autor'].'</td>';
     echo '<td>'.$registro['fecha'].'</td>';
    echo '<td> '.$this->botonEditar().$this->botonEliminar().'</td>';
    echo '</tr>';
    }
    echo '</table><br/>';
    echo $this->botonNuevo();
    }

    private function botonEditar()
    {  
      echo "<form action='editar.php' method='POST'>";
      echo "<input type='submit' name='editar' value='Editar' id='editar'>";
      echo "</form>";
    }
    private function botonNuevo()
    {  
      echo "<form action='agregar.php' method='POST'>";
      echo "<input type='submit' name='nuevo' value='NUEVO' id='nuevo'>";
      echo "</form>";
    }
    private function botonEliminar()
    {  
      echo "<form action='eliminar.php' method='POST'>";
      echo "<input type='submit' name='eliminar' value='Eliminar' id='eliminar'>";
      echo "</form>";
    }


  }
?>
