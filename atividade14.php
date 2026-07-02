<?php 

include("conexao.php");

$numero1 = 10;
$numero2 = 30;
$numero3 = 80;

$resultado = $numero1 - $numero2 - $numero3;


$sql = "INSERT INTO subtração (numero1, numero2, numero3, resultado) 
VALUES ($numero1, $numero2, $numero3, $resultado)";


if ($conexao->query($sql)){

    echo"<br>Dados Salvos da subtracao!";
    
}else{
    echo"<br>Erro ao salvar";
}



?>