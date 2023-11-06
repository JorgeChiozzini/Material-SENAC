<?php
// Função para classificar o IMC em faixas
function classificarIMC($imc)
{
    $faixas = array(
        "Magreza" => 18.5,
        "Saudável" => 24.9,
        "Sobrepeso" => 29.9,
        "Obesidade Grau I" => 34.9,
        "Obesidade Grau II" => 39.9
    );

    foreach ($faixas as $faixa => $limite) {
        if ($imc <= $limite) {
            echo "Atenção, seu IMC é $imc, e você está classificado como $faixa";
            return;
        }
    }

    echo "Atenção, seu IMC é $imc, e você está classificado como Obesidade Grau III";
}

// Valor do IMC a ser classificado
$imc = 25.30;

// Chamada da função
classificarIMC($imc);
?>
