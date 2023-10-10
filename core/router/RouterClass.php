<? 

require_once '../AbstractCore.php';
require_once './web_routes/web.php';

class RouterClass extends AbstractCore {
    private $path = null;
    private $instance = null;
    public function init() 
    {
        $this->path = explode('/', $_SERVER['REQUEST_URI']);


        var_dump($this->path);
    }

    // исходя из запроса проверяет на соответствие по 3 параметрам (файл, класс, метод)
    public function findPath($param)
    {
        $file = web::findRoute($_SERVER['REQUEST_URI']);

        $this->checkFile($file);
        $obj = $this->checkClass($file);
        $this->checkMethod($obj, $file['method']);

    }

    public function checkFile($param)
    {
        if(!file_exists($param['file'])) {
            die("Файла {$param['file']} не существует");
        }

        require_once $param['file'];
    }

    public function checkClass($param)
    {
        if(!class_exists($param['class'])) {
            die("Класса {$param['class']} не существует");
        }

        return new $param['class']();
    }

    public function checkMethod($obj, $method, $params = null) {
        if(!method_exists($obj, $method)) {
            die("Метод $method не существует");
        }

        $obj->method($params);
    }

    public static function getInstance() 
    {
        if(!self::$instance) {
            return self::$instance = new self();
        }

        return self::$instance;
    }

    // private function __construct(){}
    // private function __clone(){}
} 

$obj = new RouterClass();
