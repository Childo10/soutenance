<?php
require 'vendor/autoload.php';
define('CHEMIN_PROJET', '/stage/gestion-emploi-du-temps/');
define('DATABASE_HOST', 'localhost');
define('DATABASE_NAME', 'gestion_emploi');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');
define('EMAIL_ADDRESS', 'childohouedanou1998@gmail.com ');
define('EMAIL_PASSWORD', 'ylbdsjngxhbzfetz');



$default_profile = "Etudiant";
$default_profile_folder = "app/Etudiant/index.php";
$params = [];

if (isset($_GET['p']) && !empty($_GET['p'])) {
    $params = explode('/', $_GET['p']);
    $profile = (isset($params[0]) && !empty($params[0])) ? $params[0] : $default_profile;
    $profile_folder = "app/" . $profile . "/index.php";
    if (file_exists($profile_folder)) {
        include $profile_folder;
    } else {
        include $default_profile_folder;
    }
} else {
    include $default_profile_folder;
}
