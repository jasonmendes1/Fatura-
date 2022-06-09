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