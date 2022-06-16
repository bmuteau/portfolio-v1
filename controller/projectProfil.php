<?php

global $db, $hlp;

$id = $hlp->myGet('id');
$userAccount = false;

$projectData = array(
    'id' => "",
    'name' => "",
    'image' => "",
);

if ($hlp->myGet('id') != null) {
    $change = $hlp->getProjectModel($hlp->myGet('id'));
    $userAccount = true;
    $projectData['uid'] = $change[0]['id'];
    $projectData['name'] = $change[0]['name'];
    $projectData['image'] = $change[0]['image'];
    $projectData['type'] = $change[0]['type'];
    $projectData['duration'] = $change[0]['duration'];
    $projectData['link'] = $change[0]['link'];
    $projectData['desc'] = $change[0]['desc'];
}

$connect = $db->connect();

if ($connect != null) {

    $stm =  $connect->prepare("SELECT * FROM project  WHERE id=? ");
    $stm->execute(array($projectData['uid']));
    $pInfo = $stm->fetchAll();

    $query = $connect->prepare("SELECT logo FROM stack_list INNER JOIN project ON stack_list.id=project.stack_id  WHERE project.id=? ");
    $query->execute(array($projectData['uid']));
    $stack = $query->fetchAll();
}



include 'view/projectProfil.php';
