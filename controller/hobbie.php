<?php
global  $db, $hlp;


$connect = $db->connect();

$stm = $connect->prepare("SELECT * FROM hobbie");
$stm->execute();
$hobbie = $stm->fetchAll();

include 'view/hobbie.php';
include 'view/sidebar.php';
include 'view/taskbar.php';
