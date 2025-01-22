<?php

function Sloanes($a) {
    $i = 0; $p = 0;
    for($i = 0; $i < $a; $i++)
    {
        $p = (($i * ($i + 1)) / 2) + 1;   
        echo $p . " ";
    }
}

$a = trim(fgets(STDIN));
Sloanes($a);
?>