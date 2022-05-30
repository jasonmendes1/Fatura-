<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="col-sm-8">
            <p><th>ID: <?= $fatura->id ?></th></p>
            <p><th>Data: <?= $fatura->data ?></th></p>
            <p><th>Valor total: <?= $fatura->valortotal ?></th></p>
            <p><th>Iva Total: <?= $fatura->ivatotal ?></th></p>
            <p><th>Estado: <?= $fatura->estado ?></th></p>
            <p><th>Linha Fatura: <?= $fatura->linhafatura_id ?></th></p>
            <p><th>Cliente: <?= $fatura->cliente_id ?></th></p>
            <p><th>Funcionário: <?= $fatura->func_id ?></th></p>
            <a href="router.php?c=fatura&a=edit&id=<?=$fatura->id ?>" class="btn btn-success" role="button">Edit</a>
            <a href="router.php?c=fatura&a=delete&id=<?=$fatura->id ?>" class="btn btn-danger" role="button">Delete</a>
            <hr></hr>
        </div>
        <div class="col-sm-6">
            <h4>Criar nova Fatura</h4>
            <p>
                <a href="router.php?c=fatura&a=create" class="btn btn-info" role="button">Criar</a>
            </p>
        </div>
    </div>
</body>