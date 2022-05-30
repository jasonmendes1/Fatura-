<?php
require_once 'startup/boot.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/FaturaController.php';
require_once 'controllers/ProdutoController.php';

if(!(isset($_GET['c']) AND isset($_GET['a']))){
    $auth = new AuthController();
    $auth->index();
}else{

    $controller = $_GET['c'];
    $action = $_GET['a'];

    switch ($controller){
        case 'auth':
            $auth = new AuthController();
            switch ($action){
                case 'index':
                    $auth->index();
                    break;
                case 'login':
                    $auth->login();
                    break;
                case 'logout':
                    $auth->logout();
                    break;
            }
        break;
        case 'fatura':
            $fatura = new FaturaController();
            switch ($action) {
                case 'index':
                    $fatura->index();
                    break;
            }
        break;
        case 'produto':
            $produto = new ProdutoController();
            switch ($action) {
                case 'index':
                    $produto->index();
                    break;
                case 'show':
                    $id = $_GET['id'];
                    $produto->show($id);
                    break;
                case 'create':
                    $produto->create();
                    break;
                case 'store':
                    $produto->store();
                    break;
                case 'edit':
                    $id = $_GET['id'];
                    $produto->edit($id);
                    break;
                case 'update':
                    $id = $_GET['id'];
                    $produto->update($id);
                    break;
                case 'delete':
                    $id = $_GET['id'];
                    $produto->delete($id);
                    break;
            }
        break;
        case 'empresa':
            $empresa = new EmpresaController();
            switch ($action) {
                case 'index':
                    $empresa->index();
                    break;
                case 'show':
                    $id = $_GET['id'];
                    $empresa->show($id);
                    break;
                case 'create':
                    $empresa->create();
                    break;
                case 'store':
                    $empresa->store();
                    break;
                case 'edit':
                    $id = $_GET['id'];
                    $empresa->edit($id);
                    break;
                case 'update':
                    $id = $_GET['id'];
                    $empresa->update($id);
                    break;
                case 'delete':
                    $id = $_GET['id'];
                    $empresa->delete($id);
                    break;               
            }
            break;
        }
    }