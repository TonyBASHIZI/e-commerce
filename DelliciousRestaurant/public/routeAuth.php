<?php
use App\App;
use Core\Auth\DBAuth;

define('ROOT', dirname(__DIR__)); 
require ROOT. "/app/App.php";
App::load();


if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'login';
}
// $app = new DBAuth($App->getDB('users'));

// if(!$auth->isLogged() && $page != 'login')
// {

//    $app->forbidden('login');

// }

ob_start();

if ($page === 'login') {
    require ROOT . '/ressouces/views/admin/welcome.php';
}
$content = ob_get_clean();


require ROOT . '/ressouces/views/layouts/defaulAut.php';