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
    if (isset($_POST['submit-project'])) {
        $result = $hlp->addProject($_POST['name-project'],  $_POST['desc-project'], $_FILES['pro-logo'], $_POST['duration-project'], $_POST['type-project'], $_POST['link-project']);
    }
    if (isset($_POST['submit-formation'])) {
        $result = $hlp->addFormation($_POST['name-formation'],  $_POST['for-start-date'], $_POST['for-end-date']);
    }
    if (isset($_POST['submit-experience'])) {
        $result = $hlp->addExperience($_POST['name-experience'],  $_POST['exp-start-date'], $_POST['exp-end-date'], $_POST['exp-detail'], $_POST['company'], $_POST['place']);
    }
    if (isset($_POST['submit-hob'])) {
        $result = $hlp->addHobbie($_FILES['image-hob'], $_POST['name-hob']);
    }

    $stm = $connect->prepare("SELECT * FROM stack_list ");
    $stm->execute();
    $stackItem = $stm->fetchAll();

    $stm = $connect->prepare("SELECT * FROM avis ORDER BY id DESC LIMIT 5");
    $stm->execute();
    $avis = $stm->fetchAll();

    $stm = $connect->prepare("DELETE FROM avis WHERE id='$id'");
    $stm->execute();

    include 'view/backoffice.php';
} else {

    include 'view/login.php';
}
