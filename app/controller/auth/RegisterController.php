<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/model/UserModel.php';

class RegisterController {
    public function index() 
    {
        require_once 'app/view/registry.php';
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

            $user = UserModel::getInstance();
            $user->createUser($login, $email, $password);
        }

    }
}