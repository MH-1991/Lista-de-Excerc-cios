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

echo "meu filho tem 2 anos: ".categorizarIdade(2)."<br>";
echo "meu irmao tem 17 anos:".categorizarIdade(17)."<br>";
echo "eu tenho 34 anos:".categorizarIdade(34)."<br>";
echo "meu vô tem 82 anos:".categorizarIdade(72)."<br>";
?>