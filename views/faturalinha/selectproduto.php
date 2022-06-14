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
    <script src="public/js/table_users.js"></script>
    <link rel="stylesheet" href="public/css/table_users.css">
</head>

<body>
    <div class="container">
    <br>
    <hr>
        <h2>Produtos</h2>
        <p>Lista de produtos da <i>Fatura+</i></p>
        <table class="table table-hover" id="myTable">
            <input class="form-control" id="myInput" onkeyup="myFunction()" type="text" placeholder="Referência do Produto...">
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
                        <td><a href="router.php?c=faturalinha&a=create&idproduto=<?=$produto->id ?>">Selecionar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <td><a href="router.php?c=produto&a=create" class="btn btn-info" role="button">Criar</a></td>
    </div>
</body>