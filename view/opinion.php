<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../style/styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">

    <title>Brandon Muteau - Vos avis </title>

</head>

<body class="white wo">
    <div class="onlyMobile">
        <div class="onlyTablet t" hidden> Portfolio de Brandon Muteau </div>

        <div class="datetime">
            <p id="time" style=" 
                color: black !important;
                margin-top: -5rem;
                margin-left: 37rem;
                font-size: 25px;
            ">
            </p>
        </div>

        <h1 class="name">Votre avis m'intéresse ! </h1>
        <form class="formOpinion">
            <input type="text" name="surname" class="surnameInput" placeholder="Prénom">
            <input type="number" name="note" class="noteInput" min="0" max="10" placeholder="Note">
            <input type="email" name="email" class="emailInput" placeholder="E-mail">
            <textarea name="opinion" class="opinionInput" rows="6" cols="50" maxlength="250" placeholder="Votre avis..."></textarea>
            <input type="submit" name="submit" class="submitInput" placeholder="Envoyer">
        </form>

        <h2 class="name">Vos avis</h2>
        <ul>
            <!-- boucle for qui liste tout les avis -->
            <li class="opinion">
                <p class="surname">Prénom</p>
                <p class="avis">Avis</p>
                <p class="note">Note/10</p>
                <hr class="hrOpinion">
            </li>
        </ul>

    </div>

    <div class="onlyComputer" hidden>

        <div class="opinionDiv">

            <div class="avisDiv">
                <h2 class="name">Vos avis</h2>
                <ul>
                    <!-- boucle for qui liste tout les avis -->
                    <li class="opinion">
                        <p class="surname">Prénom</p>
                        <p class="avis">Avis</p>
                        <p class="note">Note/10</p>
                        <hr class="hrOpinion">
                    </li>

                </ul>
            </div>

            <form class="form_avis">
                <input type="text" name="surname" class="surnameInput" placeholder="Prénom"></br>
                <input type="number" name="note" class="noteInput" min="0" max="10" placeholder="Note"></br>
                <input type="email" name="email" class="emailInput" placeholder="E-mail"></br>
                <textarea name="opinion" class="opinionInput" rows="6" cols="50" maxlength="250" placeholder="Votre avis..."></textarea>
                <input type="submit" name="submit" class="submitInput" placeholder="Envoyer">
            </form>
        </div>


        <div class="taskbar">

            <button class="taskbar__start">
                <img class="taskbar__start--logo" src="../src/icon/windows.png" alt="Windows">
                Brandon
            </button>

            <button class="projects__start">
                <img class="projects__start--logo" src="../src/icon/edge.svg" alt="edge">
                <a href="">
                    Mes projets
                </a>
            </button>

            <button class="opinion__start ac">
                <img class="opinion__start--logo" src="../src/icon/word.svg" alt="word">
                <a href="">
                    Avis
                </a>
            </button>

            <button class="who__start ">
                <img class="who__start--logo" src="../src/icon/config_user.svg" alt="user">
                <a href="">
                    Qui suis-je?
                </a>
            </button>

            <button class="skill__start">
                <img class="skill__start--logo" src="../src/icon/folder.svg" alt="folder">
                <a href="">
                    Mes compétences
                </a>
            </button>

            <div class="logo__start">
                <a href=""> <img class="github__start" src="../src/icon/black_github.svg" alt="github"></a>
                <a href=""> <img class="linkedin__start" src="../src/icon/black_linkedin.svg" alt="linkedin"></a>
                <a href=""> <img class="mail__start" src="../src/icon/blue_mail.svg" alt="mail"></a>
            </div>

            <p id="timeComputer"></p>
        </div>
    </div>

</body>

<script src="../script/datetime.js"></script>


</html>