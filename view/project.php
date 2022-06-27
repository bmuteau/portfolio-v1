<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="style/styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <style type="text/css">
        .projects__start {
            background: #03a9f4;
        }
    </style>
    <title>Brandon Muteau - Mes projets</title>
</head>

<body class="white proj-edge">
    <div class="only-mobile">
        <div class="g-datetime">
            <p id="time" class="time-for-tablet" style=" 
                color: black!important;
                margin-top: 0px;
                margin-left: 40rem;
                font-size: 25px;
            ">
            </p>
        </div>
        <div class="only-tablet " hidden> Portfolio de Brandon Muteau </div>

        <h1 class="proj-name proj-name-for-tablet">Mes projets</h1>
        <a href="home" class="proj-close">X</a>


        <form method="GET">
            <button class="search-button" type='submit'><span><img class="proj-loupe proj-loupe-tab" src="src/icon/find_loupe.svg"></span></button>
            <input type="text" name="search" placeholder="Rechercher un projet" class="proj-search proj-search-tab">
        </form>

        <?php if ($hlp->myGet('search') == null) { ?>

            <div class="proj-list proj-list-tab ">
                <ul class="proj-item">

                    <?php foreach ($mtProject as $mtProjects) : ?>

                        <?=
                        '<li><a href="projetProfile?id=' . $mtProjects['id'] . ' ">' .

                            '<img src="src/icon/drive.svg" alt="drive">' .
                            $mtProjects['name'] .
                            '</a></li>'

                        ?>

                    <?php endforeach ?>

            </div>

    </div>
    </div>
<?php } elseif ($allProject->rowCount() > 0) {
?>

    <ul>

        <?php

            while ($a = $allProject->fetch()) { ?>
            <li>
                <img src="src/icon/drive.svg" alt="drive">
                <a href="projetProfile?id=<?= $a['id'] ?>">
                    <?= $a['name'] ?>
                </a>
            </li>


        <?php }

        ?>

    </ul>
<?php
        } else { ?>
    <p>Aucun résultat pour : <?= $q ?> </p>
<?php
        }
?>
<div class="onlyComputer" hidden>

    <h1 class="name">Mes projets</h1>

    <form class="search_bar" method="">
        <input type="text" name="search" placeholder="Rechercher un projet" class="search">
        <button class="search-button" type='submit'><span class='icone-loupe'><img class="loupe" src="src/icon/find_loupe.svg"></span></button>
    </form>
    <!-- Quand une recherche est faite, basculer sur une page blanche avec les resultats(pas de redirection vers projectProfil) -->
    <?php if ($hlp->myGet('search') == null) { ?>


        <div>
            <ul class="proj-list">
                <?php foreach ($mtProject as $mtProjects) : ?>
                    <?=
                    '<li>' .
                        '<a href="projetProfile?id=' . $mtProjects['id'] . ' ">' .
                        '<img class="proj-logo" src="src/icon/drive.svg" alt="drive">' .
                        '<p class="proj-texts-for-computer">' .  $mtProjects['name'] . '</p>' .
                        '</a>  </li>'

                    ?>
                <?php endforeach ?>
            </ul>

        </div>
    <?php } elseif ($allProject->rowCount() > 0) {
    ?>
        <ul>

            <?php

            while ($a = $allProject->fetch()) { ?>
                <li>
                    <img src="src/icon/drive.svg" alt="drive">
                    <a href="projetProfile?id=<?= $a['id'] ?>">
                        <?= $a['name'] ?>
                    </a>
                </li>


            <?php }

            ?>

        </ul>
    <?php
    } else { ?>
        <p>Aucun résultat pour : <?= $q ?> </p>
    <?php
    }
    ?>


</body>



</html>