<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/model/Model.php';

class UserModel extends Model 
{
    private static $instance = null;

    public function createUser($login, $email, $password) 
    {
        $query = "INSERT INTO users (login, email, password) VALUES ('$login', '$email', '$password')";

        // echo $query . '<br>';

        $create = mysqli_query($this->mysqli, $query);

        if($create) {
            session_start();

            $_SESSION['login'] = $login;
            
            header('Location: /');
        } else {
            echo 'Ошибка: ' . mysqli_error($this->mysqli);
        }
    }

    public function checkLoginUser($login, $password) 
    {
        // логин у меня в БД с индексом UNIQUE, поэтому поиск могу в принципе вести только по логину
        $query = "SELECT * FROM users WHERE login = '$login'";

        $getPass = mysqli_query($this->mysqli, $query);

        if($getPass) {
            $curr_user = mysqli_fetch_assoc($getPass);

            if(password_verify($password, $curr_user['password'])) {
                session_start();

                $_SESSION['login'] = $curr_user['login'];
                
                header('Location: /');
            }
        } else {
            echo 'Ошибка' . mysqli_error($this->mysqli);
        }
    } 


    public static function getInstance() 
    {
        if(!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __construct() 
    {
        parent::__construct();
    }

    private function __clone() {}

}

// $user = UserModel::getInstance();

// $user->checkUserFromDB('lesha12', '$2y$10$g/HkC/0bpdf9zOJ8rz3JjecLPUBDnlKWvd2ucBQ4QNG..0IFeBpXS');