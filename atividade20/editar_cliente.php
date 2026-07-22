<?php 
include"banco20.php";

$id = $_GET['id'];

$sql ="SELECT * FROM form WHERE id = $id";

$resultado = $conexao->query($sql);

$cliente = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style20.css">

</head>
<body>
  <form action="./atualizar_cliente.php" method="POST">

<h1>Atualizar Cliente</h1>

<div class="mb-3">
  <input type="hidden" class="form-control" id="exampleFormControlInput1" name="id" value="<?php echo $cliente['id']; ?>">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nome Completo</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" value="<?php echo $cliente['nome']; ?>">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Idade</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" name="idade"  value="<?php echo $cliente['idade']; ?>">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name="email"  value="<?php echo $cliente['email']; ?>">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telefone</label>
  <input type="tel" class="form-control" id="exampleFormControlInput1" name="telefone" value="<?php echo $cliente['telefone']; ?>">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Cidade</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="cidade" value="<?php echo $cliente['cidade']; ?>">
</div>


<div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit" >Enviar</button>
</div>

</form>

</body>
</html>