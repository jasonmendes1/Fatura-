<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="col-sm-8">
            <p><th>Designação Social: <?= $empresa->designacaosocial ?></th></p>
            <p><th>Email: <?= $empresa->email ?></th></p>
            <p><th>Telefone: <?= $empresa->telefone ?></th></p>
            <p><th>NIF: <?= $empresa->nif ?></th></p>
            <p><th>Morada: <?= $empresa->morada ?></th></p>
            <p><th>Código Postal: <?= $empresa->codigopostal ?></th></p>
            <p><th>Localidade: <?= $empresa->localidade ?></th></p>
            <p><th>Capital: <?= $empresa->capitalsocial ?></th></p>
            <a href="router.php?c=empresa&a=edit&id=<?=$empresa->id ?>" class="btn btn-success" role="button">Edit</a>
            <a href="router.php?c=empresa&a=delete&id=<?=$empresa->id ?>" class="btn btn-danger" role="button">Delete</a>
            <hr></hr>
        </div>
        <div class="col-sm-6">
            <h4>Criar nova Empresa</h4>
            <p>
                <a href="router.php?c=empresa&a=create" class="btn btn-info" role="button">New</a>
            </p>
        </div>
    </div>
</body>