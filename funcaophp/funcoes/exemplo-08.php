<?php

function soma(float ...$valores):float {

    return array_sum($valores);

}

echo var_dump(soma(21,54));
echo "<br>";
echo soma(45,2);
echo "<br>";
echo soma(2.4,20.8);
echo "<br>";

?>