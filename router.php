<?php
require_once 'startup/boot.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/FaturaController.php';
require_once 'controllers/ProdutoController.php';
require_once 'controllers/EmpresaController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/IvaController.php';
require_once 'controllers/FaturalinhaController.php';
require_once 'controllers/SiteController.php';
require_once 'controllers/TaskController.php';


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
                case 'indexerror':
                    $auth->indexerror();
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
                case 'cancelarfatura':
                    $id = $_GET['id'];
                    $fatura->cancelarfatura($id);
                    break;
                case 'emitirfatura':
                    $id = $_GET['id'];
                    $fatura->emitirfatura($id);
                    break;
                case 'lancamentofatura':
                    $id = $_GET['id'];
                    $fatura->lancamentofatura($id);
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
                case 'indexfuncionarios':
                    $user->indexfuncionarios();
                    break;
                case 'indexclientes':
                    $user->indexclientes();
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
                case 'selectproduto':
                    if(isset($_GET['idfatura'])){
                        $idfatura = $_GET['idfatura'];                                    
                        }
                        else{
                            $idfatura = null;
                        }
                    $faturalinha->selectproduto($idfatura);
                    break;    
                case 'create':
                    if(isset($_GET['idfatura'])){
                        $idfatura = $_GET['idfatura'];                                    
                        }
                        else{
                            $idfatura = null;
                        }
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
        case 'iva':
            $iva = new IvaController();
            switch ($action) {
                case 'index':
                    $iva->index();
                    break;
                case 'show':
                    $id = $_GET['id'];
                    $iva->show($id);
                    break;
                case 'store':
                    $iva->store();
                    break;
                case 'edit':
                    $id = $_GET['id'];
                    $iva->edit($id);
                    break;
                case 'update':
                    $id = $_GET['id'];
                    $iva->update($id);
                    break;            
            }
        break;
        case 'site':
            $site = new SiteController();
            switch ($action) {
                case 'index':
                    $site->index();
                    break;      
            }
        break;
        case 'task':
            $task = new TaskController();
            switch ($action) {
                case 'index':
                    $task->index();
                    break;
                case 'create':
                    $task->create();
                    break;
                case 'show':
                    $id = $_GET['id'];
                    $task->show($id);
                    break;
                case 'store':
                    $task->store();
                    break;
                case 'edit':
                    $id = $_GET['id'];
                    $task->edit($id);
                    break;
                case 'update':
                    $id = $_GET['id'];
                    $task->update($id);
                    break;         
                case 'task_done':
                    $id = $_GET['id'];
                    $task->task_done($id);
                    break;   
                case 'task_undone':
                    $id = $_GET['id'];
                    $task->task_undone($id);
                    break;   
            }
        break;
    }
}