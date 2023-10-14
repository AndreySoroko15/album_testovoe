<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/UserController.php';

class RegisterController {
    public function index() 
    {
        session_start(); 
        
        if(!isset($_SESSION['login'])) {
            require_once 'app/view/registry.php';
        } else {
            header('Location: /');
        }
    }

    public function registration() {
        // echo '<pre>' . print_r($_REQUEST, true) . '</pre>';

        // echo $_POST['name'];
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirm'];
        
        if($password === $password_confirm) {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $user = new UserController();
            $user->createUser($login, $email, $password);
        }
    }
}