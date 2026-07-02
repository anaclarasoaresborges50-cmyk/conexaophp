<?php 

include("conexao.php");

$numero1 = 90;
$numero2 = 50;
$numero3 = 10;

$resultado = $numero1 * $numero2 * $numero3;


$sql = "INSERT INTO multiplicação (numero1, numero2, numero3, resultado) 
VALUES ($numero1, $numero2, $numero3, $resultado)";


if ($conexao->query($sql)){

    echo"<br>Dados Salvos da multiplicacao!";
    
}else{
    echo"<br>Erro ao salvar";
}


?>