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

    <title>Brandon Muteau - Mes loisirs </title>
</head>

<body class="white">

    <div class="only-mobile">

        <div class="g-datetime">
            <p id="time" style=" 
                color: black;
                margin-top: 50px;
                margin-left: -5rem;
                font-size: 25px;
            ">
            </p>
        </div>

        <div class="only-tablet" hidden> Portfolio de Brandon Muteau </div>

        <h1 class="hob-name">Qui suis-je? </h1>
        <a href="home" class="hob-close">X</a>


        <h2 class="hob">LOISIRS</h2>

        <hr class="hob-hr">
        <ul class="hob-list">

            <?php foreach ($hobbie as $hobbies) : ?>
                <?=
                '<li>
                <img src="src/hobbie/' . $hobbies['image'] . '"  title="' . $hobbies['name'] . '" class="hob-img">' .
                    '<p class="hob-activity">' . $hobbies['name'] . '</p>
                </li>'
                ?>

            <?php endforeach ?>

        </ul>


    </div>

    <div class="only-computer" hidden>

        <div class="bar">
            <h2 class="hob">LOISIRS</h2>
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

        <div class="hob-content">
            <ul class="hob-content-list">
                <?php foreach ($hobbie as $hobbies) : ?>
                    <?=
                    '<li>
                <img src="src/hobbie/' . $hobbies['image'] . '"  title="' . $hobbies['name'] . '" class="hob-img">
                </li>'
                    ?>

                <?php endforeach ?>

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
                <a href="opinion">
                    Avis
                </a>
            </button>

            <button class="who__start ac">
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

            <p id="time">23:23</p>
        </div>


    </div>

</body>

<script src="script/datetime.js"></script>


</html>