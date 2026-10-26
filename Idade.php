<?php
function categorizarIdade($idade){
    if ($idade < 12){
        return "criança";
    }
    elseif ($idade < 18){
        return "adolescente";
    }
}

?>