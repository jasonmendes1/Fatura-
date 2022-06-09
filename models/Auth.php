<?php
class Auth
{
    public  function __construct()
    {
        session_start();
    }

    function checkAuth($username, $password)
    {
        $user = User::find_by_username_and_password($username, $password);
        $cliente = User::find_all_by_role('Cliente');
        $func = User::find_all_by_role('Funcionário');
        $admin = User::find_all_by_role('Administrador');
        
        if ($user!=null) {
            $_SESSION['username'] = $username;
            //if ($cliente){}
            //if ($func){}
            //if ($admin){}
            return true;
        } else {
            return false;
        }
    }
    

    function isLoggedin()
    {
        if (isset($_SESSION['username'])) {
            return true;
        } else {
            return false;
        }
    }

    public function logout()
    {
        session_destroy();
    }
}
