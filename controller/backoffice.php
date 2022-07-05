<?php
global $hlp, $db;
$id = $hlp->myGet("id");
$result = -1;
$error = "";

if ($hlp->isConnected() == true) {
    $connect = $db->connect();

    if (isset($_POST['submit-stack'])) {
        $result = $hlp->addStack($_POST['name-stack'], $_FILES['sta-logo']);
    }

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
