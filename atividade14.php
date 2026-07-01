<?php 
include "conexao.php";

$numero1 = 100;
$numero2 = 20;
$numero3 = 50;

$resultado = $numero1 - $numero2 - $numero3;



$sql = "INSERT INTO subtração (numero1, numero2, numero3, resultado)
VALUES ($numero1, $numero2, $numero3, $resultado)";

if ($conexao -> query($sql)) {
    echo "Os dados das três somas foram salvos com sucesso!";
}else {
    echo "Erro ao salvar os dados da soma";
}

?>