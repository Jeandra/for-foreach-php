<?php

$frutas = ["uva", "banana", "manga", "limão"];
$quantidade = count($frutas);

#FOR
for ($i=0; $i < $quantidade; $i++) { 

    echo "<p>$frutas[$i]</p>";
    
}
echo"<hr>";

#FOREACH
foreach ($frutas as $indice=> $nome) {
    echo "<p>$indice : $nome";
}