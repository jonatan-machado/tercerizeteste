<?php
require 'usuario.php';
$usuario = new usuario();
$clientes = $usuario->selecionarTudo('cliente');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Lista de Clientes</title>
    <meta charset="utf-8"/>


</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<body>
<h1> Lista dos nossos clientes:</h1>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">CNPJ</th>
        <th scope="col">Tipo de cadastro</th>
        <th scope="col">Ver mais detalhes</th>
    </tr>
    </thead>
    <tbody>
<?php
foreach ($clientes as $key => $value) { ?>
    <tr>
        <th scope="row"><?php echo $value['id']; ?></th>
        <td><?php echo $value['nome']; ?></td>
        <td><?php echo $value['cpf']; ?></td>
        <td><?php echo $value['cnpj']; ?></td>
        <td><?php echo $value['pessoa']; ?></td>
        <td><a class="btn btn-info btn-sm active" role="button" href="detalhe.php?id=<?php echo $value['id']; ?>"> Ver mais</a></td>
    </tr>
    <?php
}
    ?>
    </tbody>

</table>
<td><a class="btn btn-primary btn-sm active" role="button" href="cadastrar-cliente.php"> Cadastrar Clientes</a></td>


</body>
</html>
