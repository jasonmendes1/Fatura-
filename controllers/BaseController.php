<?php

class BaseController
{
    public function renderView($controllerPrefix, $viewName, $params = []) {
        extract($params);

        if(session_status() != PHP_SESSION_ACTIVE){
            session_start(); # //TODO Perde a sessão cada vez que entra neste controller
        }

        if (isset($_GET['c'])){
            $controller = $_GET['c'];
        }
        
        $empresa = Empresa::find([1]);

        if(isset($_SESSION['id'])){
            $auth = new Auth();
            $user = $auth->getUser();
        }

        require_once 'views/layouts/header.php';
        require_once 'views/'. $controllerPrefix . '/'. $viewName .'.php';
        require_once 'views/layouts/footer.php';
    }

    public function redirectToRoute($controllerPrefix, $action, $params = []){
        $url = 'Location: router.php?c='.$controllerPrefix.'&a='.$action;
        foreach ($params as $paramKey => $paramValue){
            $url.='&'.$paramKey.'='.$paramValue;
        }
        header($url);
    }
}