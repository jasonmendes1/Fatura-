<?php
class LoginController extends BaseController{

    function login()
    {
        $login = new LoginController();
        return redirect()->route('home.login', ['login' => $login]);
    }
}