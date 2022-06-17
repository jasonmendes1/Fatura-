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
    <hr>
    <div class="container">
        <h2>Percentagem de Ivas</h2>
        <p>Lista de produtos da <i>Fatura+</i></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Percentagem</th>
                    <th>Descrição</th>
                    <th>Vigor</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ivas as $iva) { ?>
                    <tr>
                        <td><a href="router.php?c=iva&a=show&id=<?=$iva->id ?>"><?= $iva->percentagem ?>%</a></td>
                        <td><?= $iva->descricao ?></td>
                        <td><?= $iva->vigor ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>