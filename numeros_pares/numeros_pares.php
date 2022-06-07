<?php

$numero = $_REQUEST['txt_n1'];
$c = 0;
while ($c <= 100) {
  if ($numero % 2 == 0) {
    echo "$numero ";
  }
  $numero++;
  $c++;

}
?>