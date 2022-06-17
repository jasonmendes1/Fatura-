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
        <br>
        <hr>
        <!-- //TODO: Informacao faturas(idfatura, data, idcliente.) -->
        <h2><b>Empresa: </b></h2>
            <div class="row">
                <div class="col-sm-3">
                    <p>Designação Social: <?= $empresa->designacaosocial ?>
                    <p>Email: <?= $empresa->email ?>
                    <p>Telefone: <?= $empresa->telefone ?>
                    <p>Localidade: <?= $empresa->localidade ?>
                </div>
                <div class="col-sm-3">
                    <p>NIF: <?= $empresa->nif ?>
                    <p>Morada: <?= $empresa->morada ?>
                    <p>Código Postal: <?= $empresa->codigopostal ?>
                    <p>Capital Social: <?= $empresa->capitalsocial ?>
                </div>

        </div><hr>
        <div class="row">
            <div class="col-sm-5">
                <h4>Fatura: <?= $fatura->id ?></h4>
                <p><th>Data: <?= $fatura->data ?></th></p>
                <p><th>Valor total: <?= $fatura->valortotal ?></th></p>
                <p><th>Iva Total: <?= $fatura->ivatotal ?></th></p>
                <?php                             
                if($fatura->estado == 'Cancelada'){?>
                    <p style="color:red"><th>Estado: <?= $fatura->estado ?></th></p>
                <?php } ?>
                <?php                             
                if($fatura->estado == 'Emitida'){?>
                    <p style="color:green"><th>Estado: <?= $fatura->estado ?></th></p>
                <?php } ?>
                <?php                             
                if($fatura->estado == 'Em Lancamento'){?>
                    <p><th>Estado: <?= $fatura->estado ?></th></p>
                <?php } ?>
                <p><th>Cliente: <?= $fatura->cliente->username ?></th></p>
                <p><th>Funcionário: <?= $fatura->func->username ?></th></p>

                <hr></hr>
                <?php if($user->role == 'Funcionario' || $user->role == 'Administrador'){?>
                <a href="router.php?c=fatura&a=cancelarfatura&id=<?=$fatura->id ?>" class="btn btn-danger" role="button">Cancelar</a>
                <a href="router.php?c=fatura&a=lancamentofatura&id=<?=$fatura->id ?>" class="btn btn-secondary" role="button">Em Lancamento</a>
                <a href="router.php?c=fatura&a=emitirfatura&id=<?=$fatura->id ?>" class="btn btn-success" role="button">Emitir</a>
                <?php }?>

            </div>
        </div>
        <br>
        <div class="col-sm-6">
            <h4>Produtos:</h4>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Referência</th>
                    <th>Quantidade</th>
                    <th>Preço Unidade</th>
                    <th>IVA</th>
                    <th>SubTotal</th>
                    <?php                             
                        if($fatura->estado == 'Em Lancamento'){?>
                            <th>Ação</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($faturalinhas as $faturalinha) { ?>
                    <tr>
                        <td><?= $faturalinha->produto->referencia ?></td>
                        <td><?= $faturalinha->quantidade ?></td>
                        <td><?= $faturalinha->produto->preco ?>€</td>
                        <td><?= $faturalinha->valoriva ?>%</td>
                        <td><?= $faturalinha->valor ?></td>
                        <?php                             
                        if($fatura->estado == 'Em Lancamento'){?>
                            <td>
                                <a href="./router.php?c=faturalinha&a=edit&id=<?=$faturalinha->id ?>"
                                class="btn btn-info" role="button">Edit</a>
                                <a href="./router.php?c=faturalinha&a=delete&id=<?=$faturalinha->id ?>"
                                class="btn btn-danger" role="button">Delete</a>
                            </td>                        
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php                             
            if($fatura->estado == 'Em Lancamento'){?>
                <a href="router.php?c=faturalinha&a=selectproduto" class="btn btn-info" role="button">Selecionar Produto</a><br><br>
        <?php } ?>
    </div>
</body>