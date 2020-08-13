<?php

function soma(int ...$valores){

    return array_sum($valores);

}

echo soma(21,54);
echo "<br>";
echo soma(45,2);
echo "<br>";
echo soma(2.5,20.8);
echo "<br>";

?>