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
        if ($user!=null) {

            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
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
