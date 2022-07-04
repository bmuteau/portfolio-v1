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
    <title>Brandon Muteau - <?= $projectData['name'] ?></title>
</head>

<body class="white">
    <div class="only-mobile">

        <div class="g-datetime">
            <p id="time" class="time-for-tablet">
            </p>
        </div>
        <div class="only-tablet " hidden> Portfolio de Brandon Muteau </div>

        <h1 class="pp-name pp-name-for-tablet"><?= $projectData['name'] ?></h1>
        <a href="home" class="pp-close">X</a>


        <img src="src/project/<?= $projectData['image'] ?>" class="pp-img pp-img-tab" alt="drive">
        <div class="pp-info pp-info-tab">
            <p> <?= $projectData['name'] ?></p>
            <p> <?= $projectData['type'] ?> </p>
            <p> <?= $projectData['duration'] ?> Heures</p>
            <p><a href="<?= $projectData['link'] ?>" class="link"> Voir le projet </a></p>
        </div>

        <h2 class="pp-desc pp-desc-tab">Description</h2>
        <p class="pp-description"><?= $projectData['desc'] ?></p>

        <h2 class="pp-desc">Stack utilisés</h2>
        <ul>
            <?php foreach ($stack as $stacks) : ?>
                <li class="pp-stack">
                    <img src="src/stack/<?= $stacks['logo'] ?>">

                </li>
            <?php endforeach ?>
        </ul>
    </div>

    <div class="only-computer" hidden>

        <div class="pp-top-left">
            <img src="src/project/<?= $projectData['image'] ?>" class="pp-img-comp" alt="drive">
            <h1 class="pp-name pp-name-for-tablet"><?= $projectData['name'] ?></h1>
            <h2 class="pp-desc pp-desc-tab">Description</h2>
            <p class="pp-description-comp"><?= $projectData['desc'] ?></p>
        </div>

        <div class="pp-info-comp">
            <p> <?= $projectData['name'] ?></p>
            <p> <?= $projectData['type'] ?> </p>
            <p> <?= $projectData['duration'] ?> Heures</p>
            <p><a href="<?= $projectData['link'] ?>" class="link"> Voir le projet </a></p>
            <h2 class="pp-desc">Stack utilisés</h2>
            <ul class="pp-stack-list">
                <?php foreach ($stack as $stacks) : ?>
                    <li class="pp-stack">
                        <img src="src/stack/<?= $stacks['logo'] ?>">

                    </li>
                <?php endforeach ?>
            </ul>
            <a class="pp-back-proj" href="projet">Retour à la page précédente</a>
        </div>



    </div>

</body>

<script src="script/datetime.js"></script>


</html>