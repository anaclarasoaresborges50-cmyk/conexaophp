<?php 
include "conexao.php";

$nume1 = 35;
$nume2 = 70;
$nume3 = 10;

$resultado = $nume1 + $nume2 + $nume3;



$sql = "INSERT INTO soma(numero1, numero2, numero3, resultado)
VALUES ($nume1, $nume2, $nume3, $resultado)";

if ($conexao -> query($sql)) {
    echo "Os dados das três somas foram salvos com sucesso!";
}else {
    echo "Erro ao salvar os dados da soma";
}
?>