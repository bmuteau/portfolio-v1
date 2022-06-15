<?php
session_start();


use Application\Database;



$db_class_name = "Application\Database";

$autoloader_db = function ($db_class_name) {
    // on prépare le terrain : on remplace le séparteur d'espace de nom par le séparateur de répertoires du système
    $name = str_replace('\\', DIRECTORY_SEPARATOR, $db_class_name);
    // on construit le chemin complet du fichier à inclure :
    // il faut que l'autoloader soit toujours à la racine du site : tout part de là avec __DIR__
    $path = __DIR__ . DIRECTORY_SEPARATOR . $name . '.php';

    // on vérfie que le fichier existe et on l'inclut
    // sinon on passe la main à une autre autoloader (return false)
    if (is_file($path)) {
        include $path;
    } else {
        return false;
    }
};
spl_autoload_register($autoloader_db);

$hlp_class_name = "Application\HelperFunctions";

$autoloader_hlp = function ($hlp_class_name) {
    // on prépare le terrain : on remplace le séparteur d'espace de nom par le séparateur de répertoires du système
    $name = str_replace('\\', DIRECTORY_SEPARATOR, $hlp_class_name);
    // on construit le chemin complet du fichier à inclure :
    // il faut que l'autoloader soit toujours à la racine du site : tout part de là avec __DIR__
    $path = __DIR__ . DIRECTORY_SEPARATOR . $name . '.php';

    // on vérfie que le fichier existe et on l'inclut
    // sinon on passe la main à une autre autoloader (return false)
    if (is_file($path)) {
        include $path;
    } else {
        return false;
    }
};
spl_autoload_register($autoloader_hlp);


$db = new Application\Database();
$db = new Database();




$urlword = array();
if (isset($_GET['url'])) {
    $urlword = explode("/", $_GET['url']);
} else {
    array_push($urlword, "");
}

// $adminNeeded = array(

// );


$urlsPossible = array(
    "home" => 0,
    "locked" => 1,
    "experience" => 2,
    "formation" => 3,
    "competence" => 4,
    "hobbie" => 5,
    "avis" => 6,
    "profil" => 7,
    "projet" => 8,
    "projetProfile" => 9,

);

$filesPossible = array(
    "view/home.php", //0
    "view/lockedPage.php", //1
    "view/experience.php", //2
    "view/formation.php", //3
    "view/skill.php", //4
    "view/hobbie.php", //5
    "view/opinion.php", //6
    "view/profil.php", //7
    "view/project.php", //8
    "view/projectProfil.php", //9   

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
