<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title><?php echo APP_NAME ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="./public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./public/css/style.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="./router.php?c=site&a=index">Fatura+</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">

                        <?php
                        if($user!=null){
                            if($user->role == 'Cliente'){?>
                                <li class="nav-item">
                                    <a class="nav-link diabled">Cliente</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=produto&a=index">Produtos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=fatura&a=index">Faturas</a>
                                </li>
                            <?php 
                            }
                            else if($user->role == 'Administrador'){?>
                                <li class="nav-item">
                                    <a class="nav-link diabled">Menu Administrador</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=user&a=index">Users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=produto&a=index">Produtos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=fatura&a=index">Faturas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=fatura&a=index">Gestão IVA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=empresa&a=index">Empresas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=user&a=indexfuncionarios">Funcionários</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=user&a=create">Novo Funcionário
                                </a>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=task&a=index">Tarefas
                                </a>
                            <?php
                            }
                            else if($user->role == 'Funcionario'){?>
                                <li class="nav-item">
                                    <a class="nav-link diabled">Menu Funcionário</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=produto&a=index">Produtos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=fatura&a=index">Faturas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=iva&a=index">Gestão IVA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=empresa&a=index">Empresas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=user&a=indexclientes">Clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=user&a=create">Novo Cliente</a>
                                </li>   
                                <li class="nav-item">
                                    <a class="nav-link" href="router.php?c=task&a=index">Tarefas
                                </a>          
                            <?php 
                            } 
                        else{
                            echo('Tem de ter a sua sessão ligada!');
                        }?>
                        <!--
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                        -->
                    </ul>
                    <?php                             
                        if($user->role != 'Cliente'){?>
                            <a href="router.php?c=user&a=show&id=<?=$user->id ?>"><button type="submit" class="btn btn-secondary">Perfil</button></a>
                    <?php } ?>
                    <form class="d-flex">
                    <?php
                        if(isset($_SESSION['id'])){?>
                            <a href="./router.php?c=auth&a=logout" class="btn btn-secondary">Logout</a>
                        <?php }else{ ?>
                            <a href="./router.php?c=auth&a=login" class="btn btn-secondary">Login</a>
                        <?php }                         
                    }?> 
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container container_margem">