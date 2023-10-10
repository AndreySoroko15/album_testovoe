<? 

class web {
    private static $routes = [
        '/' => array(
                'file' => 'app/controllers/IndexController.php',
                'class' => 'App\Controllers\IndexController',
                'method' => 'index',
            ),
        '/test' => array(
                'file' => 'app/controllers/TestController.php',
                'class' => 'App\Controllers\TestController',
                'method' => 'index',
            ),
    ];
    
    //поиска роута в мапке 

    public static function findRoute($route)
    {
        foreach (self::$routes as $k => $v) {
            if ($k == $route){
                return $v;
            }
        }
        die('404 Page not found!');
    }
}