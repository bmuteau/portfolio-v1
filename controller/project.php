<?php

global  $db, $hlp;

$connect = $db->connect();
$allProject = "";
$allProjectComp = "";

if ($connect != null) {

    $stm = $connect->prepare("SELECT id,name,image FROM project ORDER BY id DESC");
    $stm->execute();
    $mtProject = $stm->fetchAll();

    $stm = $connect->prepare("SELECT id,name,image FROM project ORDER BY id DESC LIMIT 7");
    $stm->execute();
    $mtProjectL = $stm->fetchAll();
}

if ($hlp->myGet('search') != null) {
    $q = htmlspecialchars($hlp->myGet('search'));
    $allProject = $connect->query('SELECT * FROM project WHERE name LIKE "%' . $q . '%" ORDER BY id DESC');
}

if ($hlp->myGet('search_comp') != null) {
    $q = htmlspecialchars($hlp->myGet('search_comp'));
    $allProjectComp = $connect->query('SELECT * FROM project WHERE name LIKE "%' . $q . '%" ORDER BY id DESC');
}

include 'view/taskbar.php';
include 'view/project.php';
