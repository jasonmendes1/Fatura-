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
        <h4 class="card-title mt-3 text-center"><?=$task->description?></h4>
        Descrição:
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-hashtag"></i> </span>
            </div>
            <input readonly name="description" id="description" value="<?php if(isset($task)) { echo $task->description; }?>" class="form-control" placeholder="Descrição" type="text">
        </div> <!-- form-group// -->
        Done:
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-hashtag"></i> </span>
            </div>
            <input readonly name="done" id="done" value="<?php if(isset($task)) { echo $task->done; }?>" class="form-control" placeholder="Done" type="text">
        </div> <!-- form-group// -->
        Funcionário:
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-hashtag"></i> </span>
            </div>
            <input readonly name="func_id" id="func_id" value="<?php if(isset($task)) { echo $task->func->username; }?>" class="form-control" placeholder="func_id" type="text">
        </div> <!-- form-group// -->
        <div class="form-group">
            <a href="router.php?c=task&a=edit&id=<?=$task->id ?>" class="btn btn-primary btn-block" role="button">Editar</a>
        </div> <!-- form-group// -->
    </article>
</div>
</body>