<?php
use app\App;

define('ROOT', dirname(__DIR__)); 
require ROOT. "/app/App.php";
App::load();


if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'welcome';
}

ob_start();

if ($page === 'welcome') {
    require ROOT . '/ressouces/views/pages/welcome/welcome.php';
}elseif($page === 'about')
{
    require ROOT . '/ressouces/views/pages/about/about.php';
}else if($page === 'contact'){

     require ROOT. '/ressouces/views/pages/contact/contact.php';
}elseif($page ==='detail'){

    require ROOT. '/ressouces/views/pages/detail/detail.php';
}elseif($page == 'panier'){
 
    require ROOT. '/ressouces/views/pages/panier/panier.php';
}

$content = ob_get_clean();


require ROOT . '/ressouces/views/layouts/default.php';