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
    <br>
    <br>
    <hr>
    <div class="container">
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

        <h3><b>Cliente: </b><?= $empresa->email ?></h3>
        <p>Data de Emissão da fatura: <?= $empresa->email ?></p>
        <a href="router.php?c=fatura&a=selectproduto" class="btn btn-info" role="button">Selecionar Produto</a><br><br>
        <h2>Faturas</h2>
        <p>Lista de Faturas da <i>Fatura+</i></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Valor IVA</th>
                    <th>Fatura</th>
                    <th>Produto</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <form action="./router.php?c=faturalinha&a=store" method="POST">
                        <div class="form-group">
                            <td><input type="text" class="form-control" name="quantidade" value="<?php if(isset($faturalinha)) { echo $faturalinha->quantidade; }?>"></td>
                            <td><input type="text" readonly class="form-control" name="valor" value="<?php if(isset($faturalinha)) { echo $faturalinha->valor; }?>"></td> <!-- //TODO Valor do Produto Selecionado -->
                            <td><input type="text" readonly class="form-control" name="valoriva" value="<?php if(isset($faturalinha)) { echo $faturalinha->valoriva; }?>"></td> <!-- //TODO IVA do Produto Selecionado-->
                            <td><input type="text" readonly class="form-control" name="fatura_id" value="<?php if(isset($faturalinha)) { echo $faturalinha->fatura_id; }?>"></td> <!-- //TODO ID FATURA -->
                            <td><input type="text" readonly class="form-control" name="produto_id" value="<?php if(isset($faturalinha)) { echo $faturalinha->produto_id; }?>"></td> <!-- //TODO ID PRODUTO Selecionado-->
                        
                            <td><input class="btn btn-primary" type="submit"></button></td>
                        </div>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
</body>