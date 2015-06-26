<?php
use \SON\Cliente\Types\ClientePF;
use \SON\Cliente\Types\ClientePJ;
use \SON\BD\PersistBD;

define('CLASS_DIR', '../src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$pdo = new PersistBD(new PDO('mysql:host=localhost;dbname=phpoo', "root", ""));

$cliente = array();
for ($i=0; $i<5; $i++)
{
    $cliente[] = new ClientePF("Cliente " . ($i + 1) , 1111111111 + $i, "Endereço " . ($i + 1), 11111111 + $i);
    $pdo->persist($cliente[$i]);
}
for ($i=5; $i<10; $i++)
{
    $cliente[] = new ClientePJ("Cliente " . ($i + 1) , 1111111111 + $i, "Endereço " . ($i + 1), 11111111 + $i);
    $pdo->persist($cliente[$i]);
}

$pdo->flush();

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
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

    </style>
</head>

<body>

<div class="container">
    <h1>Cadastro de Clientes</h1>
    <p class="lead">Fase 1 do projeto</p>
    <table id="myTable" class="table tablesorter" >
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>CNPJ/CPF</th>
            <th>Tipo</th>
        </tr>
        </thead>
        <?php
        $clienteBD = $pdo->getClientes();
        foreach($clienteBD as $row)
        {
            ?>
            <tr><td><?=$row['id']?></td><td><a href="#" data-toggle="modal" data-target="#clienteModal<?=$row['id']?>"><?=$row['nome'];?></a></td><td><?=($row['tipo'] == "PF" ? $row['cpf'] : $row['cnpj']);?></td><td><?=$row['tipo'];?></td></tr>
        <?php
        }
        ?>

    </table>
</div><!-- /.container -->
<?php
$clienteBD = $pdo->getClientes();
foreach ($clienteBD as $row)
{
    ?>
    <div id="clienteModal<?=$row['id']?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Informações do Cliente</h4>
                </div>
                <div class="modal-body">
                    <p>Nome: <?=$row['nome'];?></p>
                    <p>CPF/CNPJ: <?=($row['tipo'] == "PF" ? $row['cpf'] : $row['cnpj']);?></p>
                    <p>Endereço: <?=$row['endereco'];?></p>
                    <p>Endereço de cobrança: <?=$row['endereco_cobranca'];?></p>
                    <p>Telefone: <?=$row['telefone'];?></p>
                    <p>Grau de Importância: <?=$row['grau'];?></p>
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
<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
<script>
    $( document ).ready(function() {
        $("#myTable").tablesorter();
    });

</script>

</body>
</html>