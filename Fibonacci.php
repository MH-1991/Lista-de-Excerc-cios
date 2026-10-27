<?php
function fibonacci($n){
    $anterior = 0;
    $atual = 1;

    for ($i = 0; $i < $n; $i++){
        $proximo = $anterior + $atual;
        $anterior = $atual;
        $atual = $proximo;
    }
    return $anterior;
}
for($n = 0; $n <10; $n++){
    echo fibonacci($n);

    if($n < 9){
        echo ",";
    }
}

?>