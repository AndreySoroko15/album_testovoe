<? 

class web {
    private static $routes = [
        '/' => array(
            'file' => 'app/controller/MainController.php',
            'class' => 'MainController',
            'method' => 'index',
        ),
        
        '/album' => array(
            'file' => 'app/controller/MainController.php',
            'class' => 'MainController',
            'method' => 'show',
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

    // public static function findRoute($route)
    // {
    //     foreach (self::$routes as $k => $v) {
    //         if ($k == $route){
    //             return $v;
    //         }
    //     }
    //     die('404 Page not found!');


    // }


    //честно украденный способ из GPT 
    public static function findRoute($route)
{
    // Проход по массиву маршрутов
    foreach (self::$routes as $k => $v) {
        // Разбиваем маршрут и параметры запроса
        $parts = explode('?', $route);
        $routeWithoutQuery = $parts[0]; // Это часть маршрута без параметров
        // Сравниваем часть маршрута без параметров с ключом массива
        if ($routeWithoutQuery == $k) {
            return $v;
        }
    }
    die('404 Page not found!');
}
}