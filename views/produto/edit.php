<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="col-sm-8">
        <form action="./router.php?c=produto&a=update&id=<?=$produto->id?>" method="POST">
            <div class="form-group">
                <td><input type="text" class="form-control" name="referencia" value="<?php if(isset($produto)) { echo $produto->referencia; }?>"></td>
                <td><input type="text" class="form-control" name="descricao" value="<?php if(isset($produto)) { echo $produto->descricao; }?>"></td>
                <td><input type="text" class="form-control" name="preco" value="<?php if(isset($produto)) { echo $produto->preco; }?>"></td>
                <td><input type="text" class="form-control" name="stock" value="<?php if(isset($produto)) { echo $produto->stock; }?>"></td>
                <td>
                    <div class="form-group">
                        <select class="form-control" id="select_produto" name="iva_id">
                            <?php foreach ($ivas as $iva) { ?>
                                <option value="<?=$iva->id?>">
                                <?= $iva->referencia ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </td>
                <td><input class="btn btn-primary" type="submit"></button></td>
            </div>
        </form>
        </div>
        <div class="col-sm-6">
            <h4>Criar novo Produto</h4>
            <p>
                <a href="router.php?c=produto&a=create" class="btn btn-info" role="button">Criar</a>
            </p>
        </div>
    </div>
</body>