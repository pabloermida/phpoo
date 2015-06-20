<?php
require_once "Cliente.php";

$cliente = array();
for ($i=0; $i<10; $i++)
{
    $cliente[] = new Cliente("Cliente " . ($i + 1) , 1111111111 + $i, "Endereço " . ($i + 1), 11111111 + $i);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PHPOO</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <h1>Cadastro de Clientes</h1>
    <p class="lead">Fase 1 do projeto</p>
    <table class="table" >
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>CPF</th>
        </tr>
        <?php
        foreach ($cliente as $key=>$value)
        {
        ?>
            <tr><td><?=$key?></td><td><a href="#" data-toggle="modal" data-target="#clienteModal<?=$key?>"><?=$value->getNome();?></a></td><td><?=$value->getCPF();?></td></tr>
        <?php
        }
        ?>
        </thead>
    </table>
</div><!-- /.container -->
<?php
foreach ($cliente as $key=>$value)
{
?>
<div id="clienteModal<?=$key?>" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Informações do Cliente</h4>
            </div>
            <div class="modal-body">
                <p>Nome: <?=$value->getNome();?></p>
                <p>CPF: <?=$value->getCPF();?></p>
                <p>Endereço: <?=$value->getEndereco();?></p>
                <p>Telefone: <?=$value->getTelefone();?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $( document ).ready(function() {


    });

</script>

</body>
</html>
