<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/model/UserModel.php';

class LoginController {
    public function index() 
    {
        require_once 'app/view/login.php';
    }

    public function login() 
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        if(!empty($login) && !empty($password)) {

            $user = UserModel::getInstance();

            $user->checkLoginUser($login, $password);
            
        }
    }
}