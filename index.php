<?php 

require_once 'core/CoreClass.php';
require_once 'core/router/RouterClass.php';


// подключаем ядро проекта
$core = CoreClass::getInstance();
// echo '<pre>' . print_r(get_class_methods($core), true) . '</pre>';
// echo '<pre>' . print_r(get_class_methods('CoreClass'), true) . '</pre>';
//инициализирую
$core->init();
$router = $core->getSystemObject('router');
// echo '<pre>' . print_r(get_class_methods($router), true) . '</pre>';

$router->findPath(); // неизвестно почему считает, что роутер создался на основе класса DBClass, но через get_class_methods отображаются методы для RouterClass



