<?php

class LoginModel {
    
    public function checkAuth($username, $password){
        session_start();
        
        $user = 'jason';
        $pass = '123';

        if($username=$user){
            if($password=$pass){
                $_SESSION['username'] = $user;
                $_SESSION['password'] = $pass;
            }
        }
    }
}
