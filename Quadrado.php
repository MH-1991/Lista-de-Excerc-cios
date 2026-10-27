<?php

function somaQuadrados($n){
    $soma = 0;

    for($i=1; $i <=$n; $i++){
        $soma = $soma + ($i*$i);
    }
    return $soma;
}

echo somaQuadrados(5):
?>