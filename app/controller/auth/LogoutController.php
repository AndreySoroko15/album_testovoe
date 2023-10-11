<?php 

class LogoutController 
{
    public function logout() 
    {
        session_start();

        if(isset($_SESSION)) {
            unset($_SESSION['login']);

            session_destroy();

            header('Location: /login');
        }
    }
}