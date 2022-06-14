<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.0.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>
    <div class="container">
        <br>
        <br>
        <hr>
        <!-- //TODO: Informacao faturas(idfatura, data, idcliente.) -->
        <h2><b>Empresa: </b></h2>
            <div class="row">
                <div class="col-sm-3">
                    <p>Designação Social: <?= $empresa->designacaosocial ?>
                    <p>Email: <?= $empresa->email ?>
                    <p>Telefone: <?= $empresa->telefone ?>
                    <p>Localidade: <?= $empresa->localidade ?>
                </div>
                <div class="col-sm-3">
                    <p>NIF: <?= $empresa->nif ?>
                    <p>Morada: <?= $empresa->morada ?>
                    <p>Código Postal: <?= $empresa->codigopostal ?>
                    <p>Capital Social: <?= $empresa->capitalsocial ?>
                </div>

        </div><hr>
        <div class="row">
            <div class="col-sm-4">
                <h4>Fatura: <?= $fatura->id ?></h4>
                <p><th>Data: <?= $fatura->data ?></th></p>
                <p><th>Valor total: <?= $fatura->valortotal ?></th></p>
                <p><th>Iva Total: <?= $fatura->ivatotal ?></th></p>
                <p><th>Estado: <?= $fatura->estado ?></th></p>
                <p><th>Cliente: <?= $fatura->cliente_id ?></th></p> <!-- //TODO Não dá para fazer $fatura->cliente_id->username -->
                <p><th>Funcionário: <?= $fatura->func_id ?></th></p> <!-- //TODO Não dá para fazer $fatura->func_id->user->username -->
                <a href="router.php?c=fatura&a=edit&id=<?=$fatura->id ?>" class="btn btn-success" role="button">Edit</a>
                <a href="router.php?c=fatura&a=delete&id=<?=$fatura->id ?>" class="btn btn-danger" role="button">Delete</a>
                <hr></hr>
            </div>
        </div>
        <div class="col-sm-6">
            <h4>Produtos:</h4>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID Fatura Linha</th>
                    <th>Referencia Produto</th>
                    <th>Quantidade</th>
                    <th>IVA</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($faturalinhas as $faturalinha) { ?>
                    <tr>
                        <td><?= $faturalinha->id ?></td>
                        <td><?= $faturalinha->produto_id ?></td> <!-- //TODO Mesmo problema de não conseguir buscar modelo associado -->
                        <td><?= $faturalinha->quantidade ?></td>
                        <td><?= $faturalinha->valoriva ?></td>
                        <td><?= $faturalinha->valor ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>