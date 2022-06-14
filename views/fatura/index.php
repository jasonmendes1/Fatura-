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
        <h2>Faturas</h2>
        <p>Lista de faturas da <i>Fatura+</i></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Valor Total</th>
                    <th>Iva Total</th>
                    <th>Estado</th>
                    <th>Cliente</th>
                    <th>Funcionário</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($faturas as $fatura) { ?>
                    <tr>
                        <td><a href="router.php?c=fatura&a=show&id=<?=$fatura->id ?>"><?= $fatura->id ?></a></td>
                        <td><?= $fatura->data ?></td>
                        <td><?= $fatura->valortotal ?></td>
                        <td><?= $fatura->ivatotal ?></td>
                        <td><?= $fatura->estado ?></td>
                        <td><?= $fatura->cliente_id ?></td>
                        <td><?= $fatura->func_id ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h4>Criar nova Fatura</h4>
        <p>
            <a href="router.php?c=fatura&a=create" class="btn btn-info" role="button">Criar</a>
        </p>
    </div>
</body>