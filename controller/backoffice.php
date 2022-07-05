<?php
global $hlp, $db;

if ($hlp->isConnected() == true) {

    $connect = $db->connect();

    $stm = $connect->prepare("SELECT * FROM stack_list ");
    $stm->execute();
    $stackItem = $stm->fetchAll();

    include 'view/backoffice.php';
}
include 'view/login.php';
