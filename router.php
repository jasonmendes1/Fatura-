<?php

require_once('./startup/boot.php');

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
        }
    }