<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/CoreClass.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/core/db/DBClass.php';

class Controller {
    protected $db = null;
    protected $mysqli = null;

    public function __construct() 
    {
        $core = CoreClass::getInstance();
        $this->db = $core->getSystemObject('db');
        $this->mysqli = $this->db->getDbConnection();

        // if($this->mysqli) {
        //     echo 'Успешное подключение';
        // } else {
        //     echo 'Подключение не установлено';
        // }
    }
}