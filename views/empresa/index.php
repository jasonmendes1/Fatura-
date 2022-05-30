<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Empresas</h2>
        <p>Lista de empresas da <i>Fatura+</i></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Designação Social</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>NIF</th>
                    <th>Morada</th>
                    <th>Código Postal</th>
                    <th>Localidade</th>
                    <th>Capital</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empresas as $empresa) { ?>
                    <tr>
                        <td><a href="router.php?c=empresa&a=show&id=<?=$empresa->id ?>"><?= $empresa->designacaosocial ?></a></td>
                        <td><?= $empresa->email ?></td>
                        <td><?= $empresa->telefone ?></td>
                        <td><?= $empresa->nif ?></td>
                        <td><?= $empresa->morada ?></td>
                        <td><?= $empresa->codigopostal ?></td>
                        <td><?= $empresa->localidade ?></td>
                        <td><?= $empresa->capitalsocial ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <td><a href="router.php?c=empresa&a=create" class="btn btn-info" role="button">Criar</a></td>
    </div>
</body>