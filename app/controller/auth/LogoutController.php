<?php 

class LogoutController 
{
    public function logout() 
    {
        session_start();

        if(isset($_SESSION['login'])) {

            session_unset();
            session_destroy();

            header('Location: /login');
        }
    }
}