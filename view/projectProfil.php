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

    <title>Brandon Muteau - Nom du projet</title>
</head>

<body class="white">

    <div class="g-datetime">
        <p id="time" style=" 
                   color: black!important;
                    margin-top: 50px;
                    margin-left: 38rem;
                    font-size: 25px;
            ">
        </p>
    </div>
    <div class="only-tablet " hidden> Portfolio de Brandon Muteau </div>

    <h1 class="pp-name"><?= $projectData['name'] ?></h1>
    <a href="home" class="pp-close">X</a>


    <img src="src/icon/drive.svg" class="pp-img" alt="drive">
    <div class="pp-info">
        <p> <?= $projectData['name'] ?></p>
        <p> <?= $projectData['type'] ?> </p>
        <p> <?= $projectData['duration'] ?> Heures</p>
        <p><a href="<?= $projectData['link'] ?>" class="link"> Voir le projet </a></p>
    </div>

    <h2 class="pp-desc">Description</h2>
    <p class="pp-description"><?= $projectData['desc'] ?></p>

    <h2 class="pp-desc">Stack utilisés</h2>
    <ul>
        <?php foreach ($stack as $stacks) : ?>
            <li class="pp-stack">
                <img src="src/icon/<?= $stacks['logo'] ?>">

            </li>
        <?php endforeach ?>
    </ul>


</body>

<script src="script/datetime.js"></script>


</html>