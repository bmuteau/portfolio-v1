<?php

global $db, $hlp;

$firstname = "";
$email = "";
$note = "";
$avis = "";

if (isset($_POST['submit'])) {


    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $note = $_POST['note'];
    $avis = $_POST['avis'];

    $connect = $db->connect();
    if ($connect != null) {
        $stm = $connect->prepare("INSERT INTO avis(firstname,email,note,avis) VALUES (?,?,?,?)");
        $stm->execute(array(
            $firstname,
            $email,
            $note,
            $avis

        ));
    }
}

$connect = $db->connect();

$stm = $connect->prepare("SELECT * FROM avis  ORDER BY id DESC");
$stm->execute();
$avis = $stm->fetchAll();

include 'view/opinion.php';
