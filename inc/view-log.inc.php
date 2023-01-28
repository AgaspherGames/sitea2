<?php

use function PHPSTORM_META\type;

if (file_exists('log/path.log')) {
  $datas = explode('_end_', file_get_contents('log/' . PATH_LOG));
  echo '<table border="1">';
  foreach ($datas as $data) {
    echo '<tr>';
    $data_arr = explode('|', $data);
    if (trim($data_arr[0])) {
      $date = date('Y-m-d H:i:s', (int)$data_arr[0]);
      $page = $data_arr[1];
      $ref = $data_arr[2];
      echo "<td>$date</td><td>$page</td><td>$ref</td>";}
    echo '</tr>';
  }
  echo '</table>';
}
