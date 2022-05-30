<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Empresas</h2>
        <p>Lista de Empresas da <i>Fatura+</i></p>
        <table class="table table-hover">
            <thead>
                <tr>
                <th>Designação Social</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>NIF</th>
                    <th>Morada</th>
                    <th>Código Postal</th>
                    <th>Localidade</th>
                    <th>Capital</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <form action="./router.php?c=empresa&a=store" method="POST">
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
                </tr>
            </tbody>
        </table>
    </div>
</body>