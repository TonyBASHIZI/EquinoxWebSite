<?php

use app\App;
use Core\Auth\DBAuth;

define('ROOT', dirname(__DIR__));
require ROOT . "/app/App.php";
App::load();

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

// $app = new DBAuth(App::getInstance()->getDB('user'));
// //var_dump($app);die();
//  if(!$app->isLogged() && $page != 'login' && $page != 'logout')
//  {

//     $page = 'login';

//  }

ob_start();

if ($page === 'home') {

    require ROOT . '/ressources/views/Client/welcome.php';
} else if ($page === 'about') {

    require ROOT . '/ressources/views/Client/pages/about.php';
} else if ($page === 'service') {

    require ROOT . '/ressources/views/Client/pages/panneaux.php';
}


// if ($page === 'welcome') {

//     require ROOT . '/ressources/views/admin/welcome.php';
// } else if ($page === 'allsms') {

//     require ROOT . '/ressources/views/admin/pages/allmessage.php';
// } else if ($page === 'smsdetail') {

//     require ROOT . '/ressources/views/admin/pages/detailmessage.php';
// }



$content = ob_get_clean();

if ($page === 'home' || $page === 'about') {
    require ROOT . '../ressources/views/Client/layout/default.php';
} else {
    require ROOT . '../ressources/views/Client/layout/defaultServices.php';
}