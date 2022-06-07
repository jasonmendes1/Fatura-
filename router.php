<?php
require_once 'startup/boot.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/FaturaController.php';
require_once 'controllers/ProdutoController.php';
require_once 'controllers/EmpresaController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/FaturalinhaController.php';


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
                case 'show':
                    $id = $_GET['id'];
                    $fatura->show($id);
                    break;
                case 'create':
                    if(isset($_GET['idcliente'])){
                    $idcliente = $_GET['idcliente'];                                    
                    }
                    else{
                        $idcliente = null;
                    }
                    $fatura->create($idcliente);
                    break;
                case 'store':
                    $fatura->store();
                    break;
                case 'edit':
                    $id = $_GET['id'];
                    $fatura->edit($id);
                    break;
                case 'update':
                    $id = $_GET['id'];
                    $fatura->update($id);
                    break;
                case 'delete':
                    $id = $_GET['id'];
                    $fatura->delete($id);
                    break;
                case 'selectcliente':
                    $fatura->selectcliente();
                    break;
                case 'selectproduto':
                    $fatura->selectproduto();
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
        case 'user':
            $user = new UserController();
            switch ($action) {
                case 'index':
                    $user->index();
                    break;
                case 'show':
                    $id = $_GET['id'];
                    $user->show($id);
                    break;
                case 'create':
                    $user->create();
                    break;
                case 'store':
                    $user->store();
                    break;
                case 'edit':
                    $id = $_GET['id'];
                    $user->edit($id);
                    break;
                case 'update':
                    $id = $_GET['id'];
                    $user->update($id);
                    break;
                case 'delete':
                    $id = $_GET['id'];
                    $user->delete($id);
                    break;               
            }
        break;
        case 'faturalinha':
            $faturalinha = new FaturalinhaController();
            switch ($action) {
                case 'index':
                    $faturalinha->index();
                    break;
                case 'show':
                    $id = $_GET['id'];
                    $faturalinha->show($id);
                    break;
                case 'create':
                    var_dump($_GET['idfatura']);
                    die();
                    $idfatura = $_GET['idfatura'];
                    if(isset($_GET['idproduto'])){
                        $idproduto = $_GET['idproduto'];                                    
                        }
                        else{
                            $idproduto = null;
                        }
                    $faturalinha->create($idfatura, $idproduto);
                    break;
                case 'store':
                    $faturalinha->store();
                    break;
                case 'edit':
                    $id = $_GET['id'];
                    $faturalinha->edit($id);
                    break;
                case 'update':
                    $id = $_GET['id'];
                    $faturalinha->update($id);
                    break;
                case 'delete':
                    $id = $_GET['id'];
                    $faturalinha->delete($id);
                    break;  
            }
        break;
    }
}