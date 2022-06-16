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

    <title>Brandon Muteau - Mes compétences</title>
</head>

<body class="white">

    <div class="only-mobile">
        <div class="g-datetime">
            <p id="time" style=" 
                color: black!important;
                margin-top: 50px;
                margin-left: 40rem;
                font-size: 25px;
            ">
            </p>
        </div>
        <div class="only-tablet " hidden> Portfolio de Brandon Muteau </div>

        <h1 class="ski-name">Mes compétences</h1>
        <a href="home" class="ski-close">X</a>


        <form method="">
            <button class="search-button" type='submit'><span class='icone-loupe'><img class="loupe" src="src/icon/find_loupe.svg"></span></button>
            <input type="text" name="search" placeholder="Rechercher une compétences" class="search">
        </form>

        <?php if ($hlp->myGet('search') == null) { ?>

            <div id="ski-circle">
                <p class="ski-circle-text ct">BM</p>
            </div>
            <div class="ski-info">
                <p>Brandon Muteau</p>
                <p class="ski-my-skills">Mes stacks maitrisés</p>
            </div>

            <hr>

            <ul class="ski-stack-list">

                <li class="ski-stack-item">
                    <?php foreach ($mtStack as $mtStacks) : ?>

                        <?=
                        '<img src="src/icon/badge_html.svg" alt="html">' .
                            $mtStacks['name']
                        ?>

                    <?php endforeach ?>
                </li>

            </ul>
    </div>

<?php } elseif ($allStack->rowCount() > 0) {
?>

    <ul>

        <?php

            while ($a = $allStack->fetch()) { ?>
            <li>
                <img src="src/icon/badge_html.svg" alt="html">
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

<div class="only-computer" hidden>
    <div class="bar">
        <h2 class="ski">COMPETENCES</h2>
    </div>

    <div class="exp-left-list">
        <img class="star" src="src/icon/star.svg">
        <p class="exp-left-name">Brandon Muteau</p>
        <ul class="exp-left-list-ul">
            <li><a class="b" href="profil">Info</a></li>
            <li><a class="b" href="formation">Formation</a></li>
            <li><a class="b" href="experience">Experience</a></li>
            <li><a class="b" href="hobbie">Loisirs</a></li>
        </ul>
    </div>

    <div class="ski-content">
        <ul class="ski-content-list">
            <li class="ski-content-li"> <img src="src/icon/badge_html.svg" alt="badge html" title="nom de la techno"> </li>
        </ul>

    </div>

    <div class="taskbar">

        <button class="taskbar__start">
            <img class="taskbar__start--logo" src="src/icon/windows.png" alt="Windows">
            Brandon
        </button>

        <button class="projects__start">
            <img class="projects__start--logo" src="src/icon/edge.svg" alt="edge">
            <a href="projet">
                Mes projets
            </a>
        </button>

        <button class="opinion__start">
            <img class="opinion__start--logo" src="src/icon/word.svg" alt="word">
            <a href="avis">
                Avis
            </a>
        </button>

        <button class="who__start ">
            <img class="who__start--logo" src="src/icon/config_user.svg" alt="user">
            <a href="profil">
                Qui suis-je?
            </a>
        </button>

        <button class="skill__start ac">
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

        <p id="time">23:23</p>
    </div>
</div>



</body>

<script src="script/datetime.js"></script>


</html>