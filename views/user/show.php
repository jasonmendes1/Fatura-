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




<script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    })
</script>

<body>
    <div class="container">
        <br>
        <hr>
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Editar Conta</h4>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="username" readonly id="username" value="<?php if(isset($user)) { echo $user->username; }?>" class="form-control" placeholder="Username" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="email" readonly value="<?php if(isset($user)) { echo $user->email; }?>" class="form-control" placeholder="Email" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <select class="form-control" readonly name="telefone">
                    <option selected=""><i class="flag flag-portugal">+351</i></option>
                </select>
                <input name="telefone" readonly value="<?php if(isset($user)) { echo $user->telefone; }?>" class="form-control" placeholder="Nr Telefone" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-hashtag"></i> </span>
                </div>
                <input name="nif" readonly value="<?php if(isset($user)) { echo $user->nif; }?>" class="form-control" placeholder="NIF" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-location-arrow"></i> </span>
                </div>
                <input name="morada" readonly value="<?php if(isset($user)) { echo $user->morada; }?>" class="form-control" placeholder="Morada" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-home"></i> </span>
                </div>
                <input name="codigopostal" readonly value="<?php if(isset($user)) { echo $user->codigopostal; }?>" class="form-control" placeholder="Código Postal" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-location-arrow"></i> </span>
                </div>
                <input name="localidade" readonly value="<?php if(isset($user)) { echo $user->localidade; }?>" class="form-control" placeholder="Localidade" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group" id="show_hide_password">
                <div class="input-group-prepend">
                    <a href=""><span class="input-group-text"> <i class="fa fa-eye-slash"></i></a></span>
                </div>
                <input type="password" readonly class="form-control" id="show_hide_password" name="password" value="<?php if(isset($user)) { echo $user->password; }?>">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                </div>
                <select class="form-control" readonly id="select_role" name="role">
                    <option selected><?= $user->role ?></option>
                </select>
            </div> <!-- form-group end.// -->
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
            </div> <!-- form-group// -->
        </article>
    </div>
</body>