<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<body>
    <div class="container">
    <br>
    <br>
    <br>
    <hr>
    <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center"><?=$empresa->designacaosocial?></h4>
        <form action="./router.php?c=empresa&a=update&id=<?=$empresa->id?>" method="POST">
        Designação Social
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="designacaosocial" id="designacaosocial" value="<?php if(isset($empresa)) { echo $empresa->designacaosocial; }?>" class="form-control" placeholder="Designação Social" type="text">
        </div> <!-- form-group// -->
        Email
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="email" id="email" value="<?php if(isset($empresa)) { echo $empresa->email; }?>" class="form-control" placeholder="Email" type="text">
        </div> <!-- form-group// -->
        Telefone
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
            </div>
            <input name="telefone" value="<?php if(isset($empresa)) { echo $empresa->telefone; }?>" class="form-control" placeholder="Telefone" type="text">
        </div> <!-- form-group// -->
        NIF
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-hashtag"></i> </span>
            </div>
            <input name="nif" value="<?php if(isset($empresa)) { echo $empresa->nif; }?>" class="form-control" placeholder="NIF" type="text">
        </div> <!-- form-group// -->
        Morada
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-home"></i> </span>
            </div>
            <input name="morada" value="<?php if(isset($empresa)) { echo $empresa->morada; }?>" class="form-control" placeholder="Morada" type="text">
        </div> <!-- form-group// -->
        Código Postal
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-home"></i> </span>
            </div>
            <input name="codigopostal" value="<?php if(isset($empresa)) { echo $empresa->codigopostal; }?>" class="form-control" placeholder="Cod Postal" type="text">
        </div> <!-- form-group// -->
        Localidade
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-home"></i> </span>
            </div>
            <input name="localidade" value="<?php if(isset($empresa)) { echo $empresa->localidade; }?>" class="form-control" placeholder="Localidade" type="text">
        </div> <!-- form-group// -->
        Capital Social
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-dollar-sign"></i> </span>
            </div>
            <input name="capitalsocial" value="<?php if(isset($empresa)) { echo $empresa->capitalsocial; }?>" class="form-control" placeholder="Capital Social" type="text">
        </div> <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Editar Produto </button>
            </div> <!-- form-group// -->
        </form>
    </article>
</div>
</body>