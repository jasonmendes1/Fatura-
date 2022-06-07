<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Utilizadores</h2>
        <p>Lista de Utilizadores da <i>Fatura+</i></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>NIF</th>
                    <th>Morada</th>
                    <th>Código Postal</th>
                    <th>Localidade</th>
                    <th>Role</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) { ?>
                    <tr>
                        <td><a href="router.php?c=user&a=show&id=<?=$cliente->id ?>"><?= $cliente->id ?></a></td>
                        <td><?= $cliente->username ?></td>
                        <td>************</td>
                        <td><?= $cliente->email ?></td>
                        <td><?= $cliente->telefone ?></td>
                        <td><?= $cliente->nif ?></td>
                        <td><?= $cliente->morada ?></td>
                        <td><?= $cliente->codigopostal ?></td>
                        <td><?= $cliente->localidade ?></td>
                        <td><?= $cliente->role ?></td>
                        <td><a href="router.php?c=fatura&a=create&idcliente=<?=$cliente->id ?>">Selecionar</a></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>