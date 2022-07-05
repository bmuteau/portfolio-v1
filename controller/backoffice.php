<?php
global $hlp, $db;
$id = $hlp->myGet("id");


if ($hlp->isConnected() == true) {

    $connect = $db->connect();

    $stm = $connect->prepare("SELECT * FROM stack_list ");
    $stm->execute();
    $stackItem = $stm->fetchAll();

    $stm = $connect->prepare("SELECT * FROM avis");
    $stm->execute();
    $avis = $stm->fetchAll();

    $stm = $connect->prepare("DELETE FROM avis WHERE id='$id'");
    $stm->execute();

    include 'view/backoffice.php';
} else {

    include 'view/login.php';
}
