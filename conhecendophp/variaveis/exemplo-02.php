<?php 

$anoNascimento = 1990;

$nomeCompleto = "";

//As váriaveis podem ter letra maiuscula no meio e no fim, entretanto não podem começar com letras especias(excetos alguns como o "_" ) ou números


$nome1 = "João ";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . $sobrenome;

echo $nomeCompleto;

exit;


echo $nome1;

echo "<br/>";

unset($nome1);

if (isset($nome1)){

    echo $nome1;

}
?>