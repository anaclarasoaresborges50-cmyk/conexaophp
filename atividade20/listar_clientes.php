<?php 
//incluindo o arquivo de conexão do banco de dados
include "banco20.php";
//sql listar os arquivos do banco de dados
$sql = "SELECT * FROM form";
//guardar na variável resultado a consulta do banco de dados
$resultado = $conexao->query($sql);
//iremso usar um laço de repetição while(enquanto)
while ($cliente = $resultado->fetch_assoc()) {
echo "Nome Completo: ". $cliente['nome']. "<br>";
echo "Idade:". $cliente['idade']. "<br>";
echo "Email:". $cliente['email']. "<br>";
echo "Telefone:". $cliente['telefone']. "<br>";
echo "Cidade:". $cliente['cidade']. "<br>";

echo "<a href='formulario20.php?id=".$cliente['id']."'> <button> Cadastrar </button> </a>";
echo "<a href='editar_cliente.php?id=".$cliente['id']."'> <button> Atualizar </button> </a>";

echo "<hr>";
 }
?>