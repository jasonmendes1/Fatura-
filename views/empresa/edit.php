<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="col-sm-8">
        <form action="./router.php?c=empresa&a=update&id=<?=$empresa->id?>" method="POST">
            <div class="form-group">
            <td><input type="text" class="form-control" name="designacaosocial" value="<?php if(isset($empresa)) { echo $empresa->designacaosocial; }?>"></td>
            <td><input type="text" class="form-control" name="email" value="<?php if(isset($empresa)) { echo $empresa->email; }?>"></td>
            <td><input type="text" class="form-control" name="telefone" value="<?php if(isset($empresa)) { echo $empresa->telefone; }?>"></td>
            <td><input type="text" class="form-control" name="nif" value="<?php if(isset($empresa)) { echo $empresa->nif; }?>"></td>
            <td><input type="text" class="form-control" name="morada" value="<?php if(isset($empresa)) { echo $empresa->morada; }?>"></td>
            <td><input type="text" class="form-control" name="codigopostal" value="<?php if(isset($empresa)) { echo $empresa->codigopostal; }?>"></td>
            <td><input type="text" class="form-control" name="localidade" value="<?php if(isset($empresa)) { echo $empresa->localidade; }?>"></td>
            <td><input type="text" class="form-control" name="capitalsocial" value="<?php if(isset($empresa)) { echo $empresa->capitalsocial; }?>"></td>
            <td><input class="btn btn-primary" type="submit"></button></td>
            </div>
        </form>
        </div>
        <div class="col-sm-6">
            <h4>Create a new Product</h4>
            <p>
                <a href="router.php?c=empresa&a=create" class="btn btn-info" role="button">Criar</a>
            </p>
        </div>
    </div>
</body>