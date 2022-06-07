<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
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
                            <td><input type="text" class="form-control" name="valortotal" value="<?php if(isset($produto)) { echo $produto->valortotal; }?>"></td>
                            <td><input type="text" class="form-control" name="ivatotal" value="<?php if(isset($produto)) { echo $produto->ivatotal; }?>"></td>
                            <td><input type="text" class="form-control" name="estado" value="<?php if(isset($produto)) { echo $produto->estado; }?>"></td>
                            <td><input type="text" class="form-control" name="linhafatura_id" value="<?php if(isset($produto)) { echo $produto->linhafatura_id; }?>"></td>
                            <td><input type="text" class="form-control" name="cliente_id" value="<?php if(isset($produto)) { echo $produto->cliente_id; }?>"></td>
                            <td><input type="text" class="form-control" name="func_id" value="<?php if(isset($produto)) { echo $produto->func_id; }?>"></td>
                        
                            <td><input class="btn btn-primary" type="submit"></button></td>
                        </div>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
</body>