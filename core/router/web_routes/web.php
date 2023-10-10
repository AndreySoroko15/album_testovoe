<? 

class web {
    private static $routes = [
        '/' => array(
                'file' => 'app/controller/IndexController.php',
                'class' => 'IndexController',
                'method' => 'index',
            ),
        '/registration' => array(
                'file' => 'app/controller/auth/RegisterController.php',
                'class' => 'RegisterController',
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