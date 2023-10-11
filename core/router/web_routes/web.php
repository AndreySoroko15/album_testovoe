<? 

class web {
    private static $routes = [
        '/' => array(
                'file' => 'app/controller/MainController.php',
                'class' => 'MainController',
                'method' => 'index',
            ),

        '/registration' => array(
                'file' => 'app/controller/auth/RegisterController.php',
                'class' => 'RegisterController',
                'method' => 'index',
        ),
        '/user-registration' => array(
                'file' => 'app/controller/auth/RegisterController.php',
                'class' => 'RegisterController',
                'method' => 'registration',
        ),

        '/login' => array(
                'file' => 'app/controller/auth/LoginController.php',
                'class' => 'LoginController',
                'method' => 'index',
        ),
        '/user-login' => array (
            'file' => 'app/controller/auth/LoginController.php',
            'class' => 'LoginController',
            'method' => 'login',
        ),

        '/logout' => array(
            'file' => 'app/controller/auth/LogoutController.php',
            'class' => 'LogoutController',
            'method' => 'logout',
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