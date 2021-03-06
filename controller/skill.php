<?php

global $db, $hlp;

$connect = $db->connect();
$allStack = "";

$stm = $connect->prepare("SELECT name,logo FROM stack_list ");
$stm->execute();
$mtStack = $stm->fetchAll();

if ($hlp->myGet('search') != null) {
    $q = htmlspecialchars($hlp->myGet('search'));
    $allStack = $connect->query('SELECT name FROM stack_list WHERE name LIKE "%' . $q . '%" ORDER BY id DESC');
}

include 'view/skill.php';
include 'view/sidebar.php';
include 'view/taskbar.php';
