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
        <h2>Tarefas</h2>
        <p>Lista de tarefas da <i>Fatura+</i></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task) { ?>
                    <?php if($task->done == 'Yes'){ ?>
                    <tr>
                        <td style="color:grey"><s><?= $task->description ?></s></td>
                        <?php if($user->role == 'Administrador'){ ?>
                            <td><a href="router.php?c=task&a=task_undone&id=<?=$task->id ?>" class="btn btn-secondary" role="button">Undone</a></td>
                            <td><a href="router.php?c=task&a=show&id=<?=$task->id ?>" class="btn btn-secondary" role="button">Show</a></td>

                        <?php } ?>
                    </tr>
                    <?php } else { ?>
                    <tr>
                        <td><?= $task->description ?></td>
                        <?php if($user->role == 'Administrador'){ ?>
                        <td><a href="router.php?c=task&a=task_done&id=<?=$task->id ?>" class="btn btn-success" role="button">Done</a></td>
                        <td><a href="router.php?c=task&a=show&id=<?=$task->id ?>" class="btn btn-secondary" role="button">Show</a></td> 
                    </tr>
                    <?php } ?>
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
        <?php if($user->role == 'Administrador'){ ?>
            <div>
                <form action="./router.php?c=task&a=store" method="POST">
                    <input name="description" id="description" value="<?php if(isset($task)) { echo $task->description; }?>" class="form-control" placeholder="Descrição" type="text">
            
                        </div> <!-- form-group end.// -->
                    <select class="form-control" id="func_id" name="func_id">
                                <?php foreach ($funcionarios as $func) { ?>
                                    <option value="<?=$func->id?>">
                                    <?= $func->username ?>
                                    </option>
                                <?php } ?>
                            </select>
            </div> <!-- form-group end.// -->
                    <button type="submit" class="btn btn-primary btn-block"> Criar Tarefa </button>
                </form>
            </div>
            <!--<td><a href="router.php?c=task&a=create" class="btn btn-info" role="button">Criar Tarefa</a></td>-->
        <?php } ?>
    </div>
</body>