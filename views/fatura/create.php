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
    <a href="router.php?c=fatura&a=selectcliente" class="btn btn-info" role="button">Selecionar Cliente</a>
        <h2>Faturas</h2>
        <p>Lista de Faturas da <i>Fatura+</i></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Valor Total</th>
                    <th>Iva Total</th>
                    <th>Estado</th>
                    <th>Linha Fatura</th>
                    <th>Cliente</th>
                    <th>Funcionário</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <form action="./router.php?c=fatura&a=store" method="POST">
                        <div class="form-group">
                            <td><input type="date" class="form-control" name="data" value="<?php if(isset($fatura)) { echo $fatura->data; }?>"></td>
                            <td><input type="text" class="form-control" name="valortotal" value="<?php if(isset($fatura)) { echo $fatura->valortotal; }?>"></td>
                            <td><input type="text" class="form-control" name="ivatotal" value="<?php if(isset($fatura)) { echo $fatura->ivatotal; }?>"></td>
                            <td><input type="text" class="form-control" name="estado" value="<?php if(isset($fatura)) { echo $fatura->estado; }?>"></td>
                            <td><input type="text" class="form-control" name="linhafatura_id" value="<?php if(isset($fatura)) { echo $fatura->linhafatura_id; }?>"></td>
                            <td><input type="text" class="form-control" name="cliente_id" value="<?php echo $fatura->cliente_id; ?>"></td>
                            <td><input type="text" readonly class="form-control" name="cliente_id" value="<?php echo $user->id; ?>"></td>
                        
                            <td><input class="btn btn-primary" type="submit"></button></td>
                        </div>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
</body>