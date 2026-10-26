<?php

function categorizarIdade($idade)
{
    if ($idade < 13) {
        return "criança";
    } elseif ($idade < 18) {
        return "adolescente";
    } elseif ($idade < 60) {
        return "adulto";
    } else {
        return "idoso";
    }
}

echo "10 anos: " . categorizarIdade(10) . "<br>";
echo "15 anos: " . categorizarIdade(15) . "<br>";
echo "30 anos: " . categorizarIdade(30) . "<br>";
echo "70 anos: " . categorizarIdade(70) . "<br>";
?>