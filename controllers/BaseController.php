<?php

class BaseController
{
    public function renderView($controllerPrefix, $viewName, $params = []) {
        extract($params);
        require_once 'views/layouts/header.php';
        require_once 'views/'. $controllerPrefix . '/'. $viewName .'.php';
        require_once 'views/layouts/footer.php';
    }

    public function redirectToRoute($controllerPrefix, $viewName)
    {
        header('Location: ./router.php?c='.$controllerPrefix.'&a='.$viewName);
    }
}