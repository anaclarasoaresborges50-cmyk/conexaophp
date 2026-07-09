<?php 
//incluindo o arquivo de conexão do banco de dados
include "banco.php";
//sql listar os arquivos do banco de dados
$sql = "SELECT * FROM form";
//guardar na variável resultado a consulta do banco de dados
$resultado = $conexao->query($sql);
//iremso usar um laço de repetição while(enquanto)
while ($cliente = $resultado->fetch_assoc()) {
echo "Nome Completo: ". $cliente['nome']. "<br>";
echo "Idade: ". $cliente['idade']. "<br>";
echo "E-mail: ". $cliente['email']. "<br>";
echo "telefone: ". $cliente['telefone']. "<br>";
echo "Cidade: ". $cliente['cidade']. "<br>";
}
?>