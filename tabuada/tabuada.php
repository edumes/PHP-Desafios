<?php

$numero = $_REQUEST['txt_n1'];

if ($numero > 0 and $numero <11)
{
    for($i = 0; $i < 11; $i++)
    {
        echo "$i x $numero = " . $i*$numero . "<br>";
    }
}

?>