<?php
global  $db, $hlp;


$connect = $db->connect();

$stm = $connect->prepare("SELECT * FROM experience ORDER BY start DESC");
$stm->execute();
$job = $stm->fetchAll();


include 'view/experience.php';
include 'view/taskbar.php';
include 'view/sidebar.php';
