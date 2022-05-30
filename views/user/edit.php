<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <script src="public/js/user.js"></script>
</head>

<style>
    a, a:hover{
    color:#333
    }
</style>

<body>
    <div class="container">
        <div class="col-sm-8">
        <form action="./router.php?c=user&a=update&id=<?=$user->id?>" method="POST">
            <div class="form-group">
                <td><input type="text" class="form-control" name="username" value="<?php if(isset($user)) { echo $user->username; }?>"></td>
                <td>
                    <div class="input-group" id="show_hide_password">
                        <input type="password" class="form-control" id="show_hide_password"  name="password" value="<?php if(isset($user)) { echo $user->password; }?>">
                        <div class="input-group-addon">
                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </td>
                <td><input type="text" class="form-control" name="email" value="<?php if(isset($user)) { echo $user->email; }?>"></td>
                <td><input type="text" class="form-control" name="telefone" value="<?php if(isset($user)) { echo $user->telefone; }?>"></td>
                <td><input type="text" class="form-control" name="nif" value="<?php if(isset($user)) { echo $user->nif; }?>"></td>
                <td><input type="text" class="form-control" name="morada" value="<?php if(isset($user)) { echo $user->morada; }?>"></td>
                <td><input type="text" class="form-control" name="codigopostal" value="<?php if(isset($user)) { echo $user->codigopostal; }?>"></td>
                <td><input type="text" class="form-control" name="localidade" value="<?php if(isset($user)) { echo $user->localidade; }?>"></td>
                <td>
                    <div class="form-group">
                        <select class="form-control" id="select_role" name="role">
                            <option selected><?= $user->role ?></option>
                            <option value="Funcionário">Funcionário</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Cliente">Cliente</option>
                        </select>
                    </div>
                </td>                
                <td><input class="btn btn-primary" type="submit"></button></td>
            </div>
        </form>
        </div>
</body>