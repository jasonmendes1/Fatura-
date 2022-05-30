<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="col-sm-8">
            <h2><b><?= $produto->referencia ?></b></h2>
            <p><th>Descrição: <?= $produto->descricao ?></th></p>
            <p><th>Preço: <?= $produto->preco ?></th></p>
            <p><th>Stock: <?= $produto->stock ?></th></p>
            <p><th>Iva: <?= $produto->iva_id ?></th></p>
            <a href="router.php?c=produto&a=edit&id=<?=$produto->id ?>" class="btn btn-success" role="button">Edit</a>
            <a href="router.php?c=produto&a=delete&id=<?=$produto->id ?>" class="btn btn-danger" role="button">Delete</a>
            <hr></hr>
        </div>
        <div class="col-sm-6">
            <h4>Create a new Product</h4>
            <p>
                <a href="router.php?c=book&a=create" class="btn btn-info" role="button">New</a>
            </p>
        </div>
    </div>
</body>