<?php

require_once('./vendor/autoload.php');

class BaseController
{
    public function redirectToRoute($view, $params = [])
    {
        extract($params);
        
    }

    public function renderView($view, $params = [])
    {
        extract($params);
        require_once "vistas/layout/header.php";
        require_once "vistas/$view.php";
        require_once "vistas/layout/footer.php";
    }
}
