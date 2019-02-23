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
    require ROOT . '/ressouces/views/admin/pages/insertion.php';
}else if($page === 'modifier'){

	  require ROOT . '/ressouces/views/admin/pages/modification.php';
}else if($page === 'Supprimer'){

	 require ROOT . '/ressouces/views/admin/pages/delete.php';
}elseif($page === 'commande'){
    
    require ROOT . '/ressouces/views/admin/pages/commande.php';
}elseif($page === 'livraison'){

    require ROOT . '/ressouces/views/admin/pages/livraison.php';
    
}elseif($page === 'livrer'){

    require ROOT . '/ressouces/views/admin/pages/sortieLivraison.php';
    
}elseif($page === 'paie'){

    require ROOT . '/ressouces/views/admin/pages/listeRecouvrement.php';
    
}

$content = ob_get_clean();


require ROOT . '/ressouces/views/layouts/master.php';