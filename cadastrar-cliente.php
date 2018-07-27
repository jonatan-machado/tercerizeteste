<?php
require 'usuario.php';

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Cadastro de clientes</title>
    <meta charset="utf-8" />



</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<body>
<h1>Cadastrar Clientes</h1>

<form method="post">
    <?php
    if (isset($_POST['acao'])) {
        $endereco = $_POST['endereco'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $cnpj = $_POST['cnpj'];

        if ($endereco == '') {
            echo 'O endereço está vázio!';
        } else if ($nome == '') {
            echo 'O nome está vázio!';
        } else if ($cpf == '' && $cnpj == '') {
            echo 'O campo CPF ou CNPJ precisa ser preenchido';
        } else {
            $usuario = new usuario();
            $usuario->setNome($nome);
            $usuario->setEndereco($endereco);
            if($cpf == ''){
                $usuario->setCpf("não tem CPF");
                $usuario->setCnpj($cnpj);
            }else{
                $usuario->setCpf($cpf);
                $usuario->setCnpj("Não tem CNPJ");
            }
            if($cpf == ''){
                $usuario->setPessoa("Pessoa Juridica");
            }else{
                $usuario->setPessoa("Pesoa Fisica");
            }
            $usuario->salvar();
        }
    }
    ?>
    <div class="form-group">
        <label for="formGroupExampleInput">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Endereço</label>
        <input type="text" class="form-control"  name="endereco" placeholder="Digite seu endereço" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">CPF</label>
        <input type="text" class="form-control" name="cpf" placeholder="xxx.xxx.xxx-xx">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">CNPJ</label>
        <input type="text" class="form-control" name="cnpj" placeholder="xx.xxx.xxx/xxxx-xx">
    </div>
    <button type="submit" class="btn btn-primary" name="acao">Salvar</button>
    <a class="btn btn-info" role="button" href="index.php" style="align-items: center"> Voltar</a>
</form>



</body>
</html>
