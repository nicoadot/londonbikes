<?php
echo('<ul>');
foreach ($productos as $producto) {
  echo('<li>'.$producto['Descripcion'].'</li>');
}
echo('</ul>');

 ?>
