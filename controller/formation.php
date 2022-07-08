<?php

global  $db, $hlp;

$connect = $db->connect();

$stm = $connect->prepare("SELECT * FROM formation ORDER BY start DESC");
$stm->execute();
$formation = $stm->fetchAll();

include 'view/formation.php';
include 'view/sidebar.php';
include 'view/taskbar.php';
