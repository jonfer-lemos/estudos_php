<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>


    <?php
        require './Cliente.php';
        require './ClientePessoaFisica.php';
        require './ClientePessoaJuridica.php';


        $cliente = new Cliente();
        $cliente->logradouro = "Avenina Raimunda Teixeira de Oliveira";
        $cliente->bairro = "Bela Vista";
        echo $cliente->verEndereco() . '<hr>';

        $clientePf = new ClientePessoaFisica();
        $clientePf->logradouro = "Rua lugar nem um";
        $clientePf->bairro = "Casimba funda";
        $clientePf->nome = "Maria buraco fundo";
        $clientePf->cpf = 23232323;

        echo $clientePf->verInformacaoUsuario(). '<hr>';

        $clientePj = new ClientePessoaJuridica();
        $clientePj->logradouro = "Rua em algum lugar";
        $clientePj->bairro = "go strig arede";
        $clientePj->nomeFantasia = "joao doido";
        $clientePj->cnpj = 45564654654;

        echo $clientePj->verInformacaoEmpresa(). '<hr>';


    ?>



</body>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>