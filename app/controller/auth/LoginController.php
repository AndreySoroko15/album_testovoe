<?php 

// require_once $_SERVER['DOCUMENT_ROOT'] . '/app/model/UserModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/UserController.php';

class LoginController {
    public function index() 
    {
        session_start(); 

        if(!isset($_SESSION['login'])) {
            require_once 'app/view/login.php';
        } else {
            header('Location: /'); 
        }
    }

    public function login() 
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        if(empty($login) && empty($password)) {
            $not_found_login = 'Введите логин!';
            $not_found_password = 'Введите пароль!';
        } else if (empty($password)) {
            $not_found_password = 'Введите пароль!';
        } else if (empty($login))  {
            $not_found_login = 'Введите логин!';
        } else if (!empty($password) && !empty($login)) {
            $user = new UserController();
    
            if($user->checkLoginUser($login, $password) == false) {
                $not_found_user = 'Неверный логин или пароль';
            }
        }
        
        
        require_once 'app/view/login.php';
    }
}