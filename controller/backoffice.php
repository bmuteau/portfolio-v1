<?php
global $hlp, $db;

if ($hlp->isConnected() == true) {
    include 'view/backoffice.php';
}
include 'view/login.php';
