<?php 
$path = $_SERVER['DOCUMENT_ROOT'];

require_once $path . '/core/AbstractCore.php';
require_once $path . '/core/db/DBClass.php';
require_once $path . '/core/router/RouterClass.php';

class CoreClass extends AbstractCore {
    private static $instance = null;
    private $system_objects = [];

    public function init()
    {
        if (empty($this->system_objects)){
            $this->system_objects["db"] = DBClass::getInstance();
            $this->system_objects["router"] = RouterClass::getInstance();
        }

        foreach ($this->system_objects as $obj){
            $obj->init();
        }
    }

    public function getSystemObject($request = "router")
    {
        switch ($request){
            case "db": return $this->system_objects['db'];
            case "router":   return $this->system_objects['router'];
            // case "template": return $this->system_objects['template'];
            // case "queryBuilder": return $this->system_objects['queryBuilder'];
            // case "di": return $this->system_objects['di'];
            // default: throw new \Exception("Can`t find such system object!");
        }
    }  

    public static function getInstance() 
    {
        if(!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct() {}
    private function __clone() {}
}