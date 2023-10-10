<?php
$path = $_SERVER['DOCUMENT_ROOT'];

require_once $path . '/core/AbstractCore.php';


class DBClass extends AbstractCore
{
    private $ini_file = 'db.ini';
    private $iniData = [];
    private $mysqli = null;
    private static $instance = null;

    public static function getInstance() {
        if(!self::$instance) {
            return self::$instance = new self();
        }
        
        return self::$instance;

    }

    public function init() {
        $this->connectToDB();
    }

    public function getDbConnection() {
        if($this->mysqli) {
            return $this->mysqli;
        }
    }

    private function connectToDB() {
        $this->iniData = parse_ini_file($this->ini_file);
        $this->mysqli = mysqli_connect($this->iniData['host'],
                                        $this->iniData['user'],
                                        $this->iniData['pass'],
                                        $this->iniData['db']);

        if ($this->mysqli === false) {
            echo 'Ошибка при подключении БД';
        } else {
            // echo 'Подключено успешно';
        }
    }

    private function __construct() {}
    private function __clone() {}
}