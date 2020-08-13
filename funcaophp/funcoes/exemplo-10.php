<?php

function test($callback){

    //Para Processos Lentos

    $callback();

}

test(function(){
    echo "Terminou!";
});

?>