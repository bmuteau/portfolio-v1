<?php
global  $db, $hlp;


$connect = $db->connect();

$stm = $connect->prepare("SELECT id,name,image FROM project ORDER BY id DESC");
$stm->execute();
$mtProject = $stm->fetchAll();

$stm = $connect->prepare("SELECT id,name,image FROM project ORDER BY id DESC LIMIT 7");
$stm->execute();
$mtProjectL = $stm->fetchAll();

$allProject = "";
if ($hlp->myGet('search') != null) {
    $q = htmlspecialchars($hlp->myGet('search'));
    $allProject = $connect->query('SELECT * FROM project WHERE name LIKE "%' . $q . '%" ORDER BY id DESC');
}

$allProjectComp = "";
if ($hlp->myGet('search_comp') != null) {
    $q = htmlspecialchars($hlp->myGet('search_comp'));
    $allProjectComp = $connect->query('SELECT * FROM project WHERE name LIKE "%' . $q . '%" ORDER BY id DESC');
}



include 'view/taskbar.php';
include 'view/project.php';
