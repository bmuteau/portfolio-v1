<?php
global  $db;


$connect = $db->connect();

$stm = $connect->prepare("SELECT id,name FROM projet ORDER BY id DESC");
$stm->execute();
$mtProject = $stm->fetchAll();



include 'view/project.php';
