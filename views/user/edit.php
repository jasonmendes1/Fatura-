<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="public/js/password.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>


<style>
    a, a:hover{
    color:#333
    }
</style>

<body>
    <div class="container">
        <br>
        <hr>
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Editar Conta</h4>
            <form action="./router.php?c=user&a=update&id=<?=$user->id?>" method="POST">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="username" id="username" value="<?php if(isset($user)) { echo $user->username; }?>" class="form-control" placeholder="Username" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" value="<?php if(isset($user)) { echo $user->email; }?>" class="form-control" placeholder="Email" type="email">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <select class="custom-select" style="max-width: 120px;">
                        <option selected=""><i class="flag flag-portugal">+351</i></option>
                        <option value="1">+43</option>
                        <option value="2">+34</option>
                        <option value="3">+44</option>
                    </select>
                    <input name="telefone" value="<?php if(isset($user)) { echo $user->telefone; }?>" class="form-control" placeholder="Nr Telefone" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-hashtag"></i> </span>
                    </div>
                    <input name="nif" value="<?php if(isset($user)) { echo $user->nif; }?>" class="form-control" placeholder="NIF" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-location-arrow"></i> </span>
                    </div>
                    <input name="morada" value="<?php if(isset($user)) { echo $user->morada; }?>" class="form-control" placeholder="Morada" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-home"></i> </span>
                    </div>
                    <input name="codigopostal" value="<?php if(isset($user)) { echo $user->codigopostal; }?>" class="form-control" placeholder="Código Postal" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-location-arrow"></i> </span>
                    </div>
                    <input name="localidade" value="<?php if(isset($user)) { echo $user->localidade; }?>" class="form-control" placeholder="Localidade" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group" id="show_hide_password">
                    <div class="input-group-prepend">
                        <a href=""><span class="input-group-text"> <i class="fa fa-eye-slash"></i></a></span>
                    </div>
                    <input type="password" class="form-control" id="show_hide_password" name="password" value="<?php if(isset($user)) { echo $user->password; }?>">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <select class="form-control" id="select_role" name="role">
                        <option selected><?= $user->role ?></option>
                        <option>Funcionario</option>
                        <option>Administrador</option>
                        <option>Cliente</option>
                    </select>
                </div> <!-- form-group end.// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Edit Account </button>
                </div> <!-- form-group// -->
            </form>
        </article>
    </div>
</body>