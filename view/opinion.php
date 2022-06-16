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

    <title>Brandon Muteau - Vos avis </title>

</head>

<body class="white wo">
    <div class="only-mobile">
        <div class="only-tablet t" hidden> Portfolio de Brandon Muteau </div>

        <div class="g-datetime">
            <p id="time" style=" 
                color: black !important;
                margin-top: -5rem;
                margin-left: 37rem;
                font-size: 25px;
            ">
            </p>
        </div>

        <a href="home" class="opi-close">X</a>

        <h1 class="opi-name">Votre avis m'intéresse ! </h1>
        <form class="opi-form">
            <input type="text" name="surname" class="opi-surname" placeholder="Prénom">
            <input type="number" name="note" class="opi-note" min="0" max="10" placeholder="Note">
            <input type="email" name="email" class="opi-email" placeholder="E-mail">
            <textarea name="opinion" class="opi-opinion" rows="6" cols="50" maxlength="250" placeholder="Votre avis..."></textarea>
            <input type="submit" name="submit" class="opi-submit" placeholder="Envoyer">
        </form>

        <h2 class="opi-name">Vos avis</h2>
        <ul>
            <li class="opi-list">
                <p class="opi-surname-res">Prénom</p>
                <p class="opi-avis-res">Avis</p>
                <p class="opi-note-res">Note/10</p>
                <hr class="opi-hr">
            </li>
        </ul>

    </div>

    <div class="only-computer" hidden>

        <div class="opi-div">

            <div class="opi-div">
                <h2 class="opi-name">Vos avis</h2>
                <ul>
                    <!-- boucle for qui liste tout les avis -->
                    <li class="opi-list">
                        <p class="opi-surname-res">Prénom</p>
                        <p class="opi-avis-res">Avis</p>
                        <p class="opi-note-res">Note/10</p>
                        <hr class="opi-hr">
                    </li>

                </ul>
            </div>

            <form class="opi-form">
                <input type="text" name="surname" class="opi-surname" placeholder="Prénom">
                <input type="number" name="note" class="opi-note" min="0" max="10" placeholder="Note">
                <input type="email" name="email" class="opi-email" placeholder="E-mail">
                <textarea name="opinion" class="opi-opinion" rows="6" cols="50" maxlength="250" placeholder="Votre avis..."></textarea>
                <input type="submit" name="submit" class="opi-submit" placeholder="Envoyer">
            </form>
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

            <button class="opinion__start ac">
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