<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/UserController.php';

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
        
        if(empty($login)) {

            $not_found_login = 'Введите логин';
            require_once 'app/view/registry.php';

        } else if(empty($email)) {

            $not_found_email = 'Введите email';
            require_once 'app/view/registry.php';

        } else if(empty($password)) {

            $not_found_password = 'Введите пароль';
            require_once 'app/view/registry.php';

        } else if(empty($password_confirm)) {

            $not_found_password_confirm = 'Подтвердите пароль';
            require_once 'app/view/registry.php';
            
        } else if ($password != $password_confirm) {

            $error = 'Пароли не совпадают';
            require_once 'app/view/registry.php';

        } else if($password === $password_confirm) {

            $password = password_hash($password, PASSWORD_DEFAULT);
    
            $user = new UserController();
            $user->createUser($login, $email, $password);
        }
    }

}