<?php
require_once 'BaseController.php';

class AuthController extends BaseController
{
    public function index()
    {
        $this->renderView('auth', 'index');
    }

    public function login()
    {
        include_once './models/Auth.php';
        $auth = new Auth();
        $session = $auth->checkAuth($_POST['username'], $_POST['password']);

        if ($session) {
            $user = $auth->getUser();

            if($user->role == 'Cliente'){
                $this->redirectToRoute('produto', 'index');
            } else 
            if($user->role == 'Funcionario'){
                $this->redirectToRoute('produto', 'index');
            } else
            if($user->role == 'Administrador'){
                $this->redirectToRoute('user', 'index');
            } else {
            $this->redirectToRoute('auth', 'index');
            }
        }
    }

    public function logout()
    {
        include_once './models/Auth.php';
        $auth = new Auth();

        $auth->logout();
        $this->redirectToRoute('auth', 'index');
    }
}
