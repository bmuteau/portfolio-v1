<?php
session_start();


use Application\Database;
use Application\HelperFunction;



$db_class_name = "Application\Database";

$autoloader_db = function ($db_class_name) {
    $name = str_replace('\\', DIRECTORY_SEPARATOR, $db_class_name);
    $path = __DIR__ . DIRECTORY_SEPARATOR . $name . '.php';

    if (is_file($path)) {
        include $path;
    } else {
        return false;
    }
};
spl_autoload_register($autoloader_db);

$hlp_class_name = "Application\HelperFunction";

$autoloader_hlp = function ($hlp_class_name) {
    $name = str_replace('\\', DIRECTORY_SEPARATOR, $hlp_class_name);
    $path = __DIR__ . DIRECTORY_SEPARATOR . $name . '.php';

    if (is_file($path)) {
        include $path;
    } else {
        return false;
    }
};
spl_autoload_register($autoloader_hlp);


$db = new Application\Database();
$db = new Database();
$hlp = new Application\HelperFunction();
$hlp = new HelperFunction();




$urlword = array();
if (isset($_GET['url'])) {
    $urlword = explode("/", $_GET['url']);
} else {
    array_push($urlword, "");
}


$urlsPossible = array(
    "locked" => 0,
    "notFound" => 1,
    "home" => 2,
    "experience" => 3,
    "formation" => 4,
    "competence" => 5,
    "hobbie" => 6,
    "avis" => 7,
    "profil" => 8,
    "projet" => 9,
    "projetProfile" => 10,
    "backoffice" => 11,
    "login" => 12

);

$filesPossible = array(
    "controller/lockedPage.php", //0
    "controller/notFound.php", //1
    "controller/home.php", //2
    "controller/experience.php", //3
    "controller/formation.php", //4
    "controller/skill.php", //5
    "controller/hobbie.php", //6
    "controller/opinion.php", //7
    "controller/profil.php", //8
    "controller/project.php", //9
    "controller/projectProfil.php", //10   
    "controller/backoffice.php", // 11
    "controller/login.php", // 12

);



if (count($urlword) > 0 && array_key_exists($urlword[0], $urlsPossible)) {
    $idUrl = $urlsPossible[$urlword[0]];
    $_SESSION['pageid'] = $idUrl;
    require $filesPossible[$idUrl];
} else {
    $idUrl = 0;
    $_SESSION['pageid'] = $idUrl;
    require $filesPossible[$idUrl];
}
