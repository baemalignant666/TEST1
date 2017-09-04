<!DOCTYPE html>
<html lang ="es">
  <head>
    <link rel="stylesheet" type="text/css" href="<?php echo 'views/Estiloscss/estiloexamen.css'?>"/>
    <meta charset="utf-8">
    <title>PROG5</title>
  </head>
  <body>
  <table>
    <tr>
      <td>Alimento</td>
      <td>Fibra</td>
      <td>Grasa</td>
    </tr>

    <?php
  foreach ($datos as $dato) {
    echo "<tr><td>".$dato['alimento']."</td>";
    echo "<td>".$dato['fibra']."</td>";
    echo "<td>".$dato['grasa']."</td></tr>";
  }
 ?>
  </table>
  </body>
</html>
