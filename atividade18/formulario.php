<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style18.css">

</head>
<body>
  <form action="./salvar_clientes.php" method="POST">

<h1>Formulário</h1>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nome Completo</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="nome">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Idade</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" name="idade">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">E-mail</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telefone</label>
  <input type="tel" class="form-control" id="exampleFormControlInput1" name="telefone">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Cidade</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="cidade">
</div>


<div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit" >Button</button>
</div>

</form>

</body>
</html>