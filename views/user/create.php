<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>


<style>
    .divider-text {
        position: relative;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .divider-text span {
        padding: 7px;
        font-size: 12px;
        position: relative;
        z-index: 2;
    }

    .divider-text:after {
        content: "";
        position: absolute;
        width: 100%;
        border-bottom: 1px solid #ddd;
        top: 55%;
        left: 0;
        z-index: 1;
    }

    .btn-facebook {
        background-color: #405D9D;
        color: #fff;
    }

    .btn-twitter {
        background-color: #42AEEC;
        color: #fff;
    }
</style>


<div class="container">
    <br>
    <hr>
    <?php
    if($user->role == 'Administrador'){?>
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Criar Conta</h4>
            <p class="text-center">Comece já a criar a sua conta!</p>
            <form action="./router.php?c=user&a=store" method="POST">
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
                        <span class="input-group-text"> <i class="fa fa-location-arrow"></i> </span>
                    </div>
                    <input name="localidade" value="<?php if(isset($user)) { echo $user->localidade; }?>" class="form-control" placeholder="Localidade" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-home"></i> </span>
                    </div>
                    <input name="codigopostal" value="<?php if(isset($user)) { echo $user->codigopostal; }?>" class="form-control" placeholder="Código Postal" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input id="password" name="password" class="form-control" placeholder="Create password" type="password">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Repeat password" type="password">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <select class="form-control" id="role" name="role">
                        <option selected=""> Selecione Função</option>
                        <option>Funcionario</option>
                    </select>
                </div> <!-- form-group end.// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                </div> <!-- form-group// -->
                <p class="text-center">Have an account? <a href="./router.php?c=auth&a=index">Log In</a> </p>
            </form>
        </article>
    <?php } else ?>
    <?php
    if($user->role == 'Funcionario'){?>
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Criar Conta</h4>
            <p class="text-center">Comece já a criar a sua conta!</p>
            <form action="./router.php?c=user&a=store" method="POST">
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
                        <span class="input-group-text"> <i class="fa fa-location-arrow"></i> </span>
                    </div>
                    <input name="localidade" value="<?php if(isset($user)) { echo $user->localidade; }?>" class="form-control" placeholder="Localidade" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-home"></i> </span>
                    </div>
                    <input name="codigopostal" value="<?php if(isset($user)) { echo $user->codigopostal; }?>" class="form-control" placeholder="Código Postal" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input id="password" name="password" class="form-control" placeholder="Create password" type="password">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Repeat password" type="password">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <select class="form-control" id="role" name="role">
                        <option selected=""> Selecione Função</option>
                        <option>Cliente</option>
                    </select>
                </div> <!-- form-group end.// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                </div> <!-- form-group// -->
                <p class="text-center">Have an account? <a href="./router.php?c=auth&a=index">Log In</a> </p>
            </form>
        </article>
    <?php } else if ($user==null){?>
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Tem de pedir a um funcionário da empresa uma conta!</h4>
        </article>
    <?php } ?>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<!-- recortar por aqui -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>