<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    })
</script>

<body>
    <div class="container">
        <div class="col-sm-8">
            <p><th>ID: <?= $user->id ?></th></p>
            <p><th>Username: <?= $user->username ?></th></p>
            <p><th>Password: **********</th></p>
            <p><th>Email: <?= $user->email ?></th></p>
            <p><th>Telefone: <?= $user->telefone ?></th></p>
            <p><th>NIF: <?= $user->nif ?></th></p>
            <p><th>Morada: <?= $user->morada ?></th></p>
            <p><th>Código Postal: <?= $user->codigopostal ?></th></p>
            <p><th>Localidade: <?= $user->localidade ?></th></p>
            <p><th>Role: <?= $user->role ?></th></p>

            <a href="router.php?c=user&a=edit&id=<?=$user->id ?>" class="btn btn-success" role="button">Edit</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Tem a certeza que quer apagar este utilizador?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="router.php?c=user&a=delete&id=<?=$user->id ?>" class="btn btn-danger" role="button">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr></hr>
        </div>
    </div>
</body>