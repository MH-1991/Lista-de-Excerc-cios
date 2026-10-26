<?php
function categorizarIdade($idade){
    if ($idade < 12){
        return "criança";
    }
    elseif ($idade < 18){
        return "adolescente";
    }
    elseif ($idade < 60){
        return "adulto";
    }
    else {
        return "idoso";
    }
}

echo "Meu filho tem 2 anos: ".categorizarIdade(2)."<br>";
echo "Meu irmao tem 17 anos:".categorizarIdade(17)."<br>";
echo "Eu tenho 34 anos:".categorizarIdade(34)."<br>";
echo "Meu vô tem 82 anos:".categorizarIdade(72)."<br>";
?>