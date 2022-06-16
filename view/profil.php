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

    <title>Brandon Muteau - Qui suis-je? </title>
</head>


<div class="only-mobile">

    <body class="white">
        <div class="g-datetime">
            <p id="time" style=" 
                color: black !important;
                margin-top: -1rem;
                margin-left: 37rem;
                font-size: 25px;
            ">
            </p>
        </div>
        <div class="only-tablet " hidden> Portfolio de Brandon Muteau </div>

        <h1 class="pro-name">Qui suis-je? </h1>
        <a href="home" class="pro-close">X</a>


        <div id="pro-circle">
            <p class="pro-circle-text">BM</p>
        </div>
        <div class="pro-info">
            <p>Brandon Muteau</p>
            <p class="pro-my-skills">Développeur Web</p>
        </div>

        <div class="pro-me">
            <img src="src/profil.JPG" alt="profil" class="pro-profil-img">
            <p>
                Brandon </br>
                MUTEAU
            </p>
            <p>
                25 ans </br>
                Rouen
            </p>
            <a href="mailto:muteaub@gmail.com" class="pro-mail">M'envoyer un mail</a>
        </div>

        <div class="pro-me">
            <a href="formation">Formations</a></br>
            <hr>
            <a href="experience">Experiences</a></br>
            <hr>
            <a href="hobbie">Loisirs</a></br>

        </div>
</div>

<div class="only-computer" hidden>

    <div class="bar">
        <h2 class="pro">QUI SUIS-JE ?</h2>
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

    <div class="pro-logo">
        <div class="pro-formation">
            <a href="formation">
                <img class="pro-logo-formation" src="src/icon/data.svg" alt="data">
                <p class="pro-name-formation">Formations</p>
            </a>
        </div>
        <div class="pro-experience">
            <a href="experience">
                <img class="pro-logo-experience" src="src/icon/styling_wp.png" alt="screen">
                <p class="pro-name-formation">Experiences</p>
            </a>
        </div>
        <div class="pro-hobbie">
            <a href="hobbie">
                <img class="pro-logo-hobbie" src="src/icon/control_game.svg" alt="controller game">
                <p class="pro-name-hobbie">Loisirs</p>
            </a>
        </div>

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

        <p id="time-computer"></p>
    </div>


</div>

</body>

<script src="script/datetime.js"></script>


</html>