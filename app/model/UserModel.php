<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/model/Model.php';

class UserModel extends Model 
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function createUser($login, $email, $password) 
    {
        $query = "INSERT INTO users (login, email, password) VALUES ('$login', '$email', '$password')";

        // echo $query . '<br>';

        $create = mysqli_query($this->mysqli, $query);

        if($create) {
            header('Location: /');
        } else {
            echo 'Ошибка: ' . mysqli_error($this->mysqli);
        }

    }
}