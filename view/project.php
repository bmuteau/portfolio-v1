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

    <link rel="apple-touch-icon" sizes="180x180" href="src/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/favicon/favicon-16x16.png">

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
            <p id="time" class="time-for-tablet">
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
</div>
<div class="only-computer" hidden>

    <h1 class="proj-name-comp">Mes projets</h1>


    <form class="search_bar" method="GET">
        <input type="text" name="search_comp" placeholder="Rechercher un projet" class="proj-search-comp">
        <button class="search-button" type='submit'><span class='icone-loupe'><img class="proj-loupe" src="src/icon/find_loupe.svg"></span></button>
    </form>


    <div>
        <?php if ($hlp->myGet('search_comp') == null) { ?>
            <ul class="proj-list">
                <?php foreach ($mtProjectL as $mtProjectLs) : ?>
                    <?=
                    '<li>' .
                        '<a href="projetProfile?id=' . $mtProjectLs['id'] . ' ">' .
                        '<img class="proj-logo" src="src/icon/drive.svg" alt="drive"/>' .
                        '<p class="proj-texts-for-computer">' .  $mtProjectLs['name'] . '</p>' .
                        '</a> 
                         </li>'

                    ?>
                <?php endforeach ?>
            </ul>

    </div>
<?php } elseif ($allProjectComp->rowCount() > 0) {
?>
    <ul class="proj-list">

        <?php

            while ($b = $allProjectComp->fetch()) { ?>
            <li>
                <img class="proj-logo proj-log-res" src="src/icon/drive.svg" alt="drive">
                <a class="proj-texts-for-computer-res" href="projetProfile?id=<?= $b['id'] ?>">
                    <?= $b['name'] ?>
                </a>
            </li>


        <?php }

        ?>

    </ul>
<?php
        } else { ?>
    <p class="proj-error">Aucun résultat pour : <?= $q ?> </p>
<?php
        }
?>


</body>



</html>