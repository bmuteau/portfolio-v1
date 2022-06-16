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

    <title>Brandon Muteau - Mes projets</title>
</head>

<body class="white proj-edge">
    <div class="only-mobile">
        <div class="g-datetime">
            <p id="time" style=" 
                color: black!important;
                margin-top: 0px;
                margin-left: 40rem;
                font-size: 25px;
            ">
            </p>
        </div>
        <div class="only-tablet " hidden> Portfolio de Brandon Muteau </div>

        <h1 class="proj-name">Mes projets</h1>
        <a href="home" class="proj-close">X</a>


        <form method="GET">
            <button class="search-button" type='submit'><span><img class="proj-loupe" src="src/icon/find_loupe.svg"></span></button>
            <input type="text" name="search" placeholder="Rechercher un projet" class="proj-search">
        </form>

        <?php if ($hlp->myGet('search') == null) { ?>

            <div class="proj-list">
                <!-- Remplacer par une boucle for avec les projets trouvé en BDD -->
                <div class="proj-item">

                    <?php foreach ($mtProject as $mtProjects) : ?>

                        <?=
                        '<a href="projetProfile?id=' . $mtProjects['id'] . ' ">' .

                            '<img src="src/icon/drive.svg" alt="drive">' .
                            $mtProjects['name'] .
                            '</a>'

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
                        '<p class="proj-texts>' .  $mtProjects['name'] . '</p>' .
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

    <div class="taskbar">

        <button class="taskbar__start">
            <img class="taskbar__start--logo" src="src/icon/windows.png" alt="Windows">
            Brandon
        </button>

        <button class="projects__start ac">
            <img class="projects__start--logo" src="src/icon/edge.svg" alt="edge">
            <a href="projet">
                Mes projets
            </a>
        </button>

        <button class="opinion__start">
            <img class="opinion__start--logo" src="src/icon/word.svg" alt="word">
            <a href="opinion">
                Avis
            </a>
        </button>

        <button class="who__start ">
            <img class="who__start--logo" src="src/icon/config_user.svg" alt="user">
            <a href="profil">
                Qui suis-je?
            </a>
        </button>

        <button class="skill__start">
            <img class="skill__start--logo" src="src/icon/folder.svg" alt="folder">
            <a href="competence">
                Mes compétences
            </a>
        </button>

        <div class="logo__start">
            <a href="https://github.com/bmuteau"> <img class="github__start" src="src/icon/black_github.svg" alt="github"></a>
            <a href="https://www.linkedin.com/in/brandon-muteau-a38467169/"> <img class="linkedin__start" src="src/icon/black_linkedin.svg" alt="linkedin"></a>
            <a href="mailto:muteaub@gmail.com"> <img class="mail__start" src="src/icon/blue_mail.svg" alt="mail"></a>
        </div>

        <p id="time-computer"></p>
    </div>


</div>

</body>

<script src="script/datetime.js"></script>


</html>