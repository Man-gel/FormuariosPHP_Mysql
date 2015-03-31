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
     echo '</tr>';
    foreach ($this->registros as $registro)
    {
    echo '<tr>';
     echo '<td>'.$registro['id'].'</td>';
     echo '<td>'.$registro['titulo'].'</td>';
     echo '<td>'.$registro['contenido'].'</td>';
     echo '<td>'.$registro['autor'].'</td>';
     echo '<td>'.$registro['fecha'].'</td>';
    echo '</tr>';
    }
    echo '</table>';
    }
  }
?>
