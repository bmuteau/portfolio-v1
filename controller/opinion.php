<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

global $db, $hlp;

$firstname = "";
$email = "";
$note = "";
$avis = "";
$message = "";

if (isset($_POST['submit'])) {
    $_SESSION['token'] = date('d');
    if ($_SESSION['token'] != $_POST['token']) {

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
        $message = "Avis envoyé";
    } else {
        $message = "Votre avis n'a pas était envoyé";
    }
}

$stm = $connect->prepare("SELECT * FROM avis  ORDER BY id DESC");
$stm->execute();
$avis = $stm->fetchAll();

include 'view/taskbar.php';
include 'view/opinion.php';
