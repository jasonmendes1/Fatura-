<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
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
                    <th>Linha Fatura</th>
                    <th>Cliente</th>
                    <th>Funcionário</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($faturas as $fatura) { ?>
                    <tr>
                        <td><?= $fatura->id ?></td>
                        <td><?= $fatura->id ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h4>Criar nova Fatura</h4>
        <p>
            <a href="router.php?c=book&a=create" class="btn btn-info" role="button">Criar</a>
        </p>
    </div>
</body>