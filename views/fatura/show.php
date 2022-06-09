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
        <hr>
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