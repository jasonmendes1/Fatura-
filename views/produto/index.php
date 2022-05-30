<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Produtos</h2>
        <p>Lista de produtos da <i>Fatura+</i></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Referencia</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Stock</th>
                    <th>Iva</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto) { ?>
                    <tr>
                        <td><a href="router.php?c=produto&a=show&id=<?=$produto->id ?>"><?= $produto->referencia ?></a></td>
                        <td><?= $produto->descricao ?></td>
                        <td><?= $produto->preco ?></td>
                        <td><?= $produto->stock ?></td>
                        <td><?= $produto->iva_id ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <td><a href="router.php?c=produto&a=create" class="btn btn-info" role="button">New</a></td>
    </div>
</body>