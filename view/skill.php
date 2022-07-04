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
        .skill__start {
            background: #03a9f4;
        }
    </style>
    <title>Brandon Muteau - Mes compétences</title>
</head>

<body class="white">

    <div class="only-mobile">
        <div class="g-datetime">
            <p id="time" class="time-for-tablet">
            </p>
        </div>
        <div class="only-tablet " hidden> Portfolio de Brandon Muteau </div>

        <h1 class="ski-name ski-name-for-tablet">Mes compétences</h1>
        <a href="home" class="ski-close">X</a>


        <form method="POST">
            <button class="search-button" type='submit'><span class='icone-loupe'><img class="loupe" src="src/icon/find_loupe.svg"></span></button>
            <input type="text" name="search" placeholder="Rechercher une compétences" class="search">
        </form>

        <?php if ($hlp->myGet('search') == null) { ?>

            <div id="ski-circle ski-circle-tab">
                <p class="ski-circle-text ski-circle-text-tab  ct-tab">BM</p>
            </div>
            <div class="ski-info ski-info-tab">
                <p>Brandon Muteau</p>
                <p class="ski-my-skills">Mes stacks maitrisés</p>
            </div>

            <hr>

            <ul class="ski-stack-list ski-stack-list-tab">

                <?php foreach ($mtStack as $mtStacks) : ?>
                    <li class="ski-stack-item ski-stack-item-tab">

                        <?=
                        '<img src="src/stack/' .  $mtStacks['logo'] . '" class="ski-item-img" alt="' .  $mtStacks['name'] . '"><p class="ski-item-name">' .
                            $mtStacks['name'] . '</p>'
                        ?>

                    <?php endforeach ?>
                    </li>

            </ul>
    </div>

<?php } elseif ($allStack->rowCount() > 0) {
?>

    <ul class="ski-stack-list ski-stack-list-tab">

        <?php

            while ($a = $allStack->fetch()) { ?>
            <li>
                <img class="ski-item-img ski-item-img-tab" src=" src/stack/<?= $a['logo'] ?>" alt="<?= $a['name'] ?>">
                <p class="ski-item-name ski-item-name-tab"> <?= $a['name'] ?> </p>
                </a>
            </li>


        <?php }

        ?>

    </ul>
<?php
        } else { ?>
    <p class="ski-error-tab ski-error">Aucun résultat pour : <?= $q ?> </p>
<?php
        }
?>

<div class="only-computer" hidden>
    <div class="bar">
        <h2 class="ski">COMPETENCES</h2>
    </div>

    <ul class="ski-stack-list">

        <?php foreach ($mtStack as $mtStacks) : ?>
            <li class="ski-stack-item-comp ">

                <?=
                '<img src="src/stack/' .  $mtStacks['logo'] . '" class="ski-item-img-comp" alt="' .  $mtStacks['name'] . '"><p class="ski-item-name">' .
                    $mtStacks['name'] . '</p>'
                ?>

            <?php endforeach ?>
            </li>

    </ul>
</div>




</body>


</html>