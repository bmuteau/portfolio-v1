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
    <title>Brandon Muteau - Mon portfolio</title>
</head>

<body class="home">
    <div class="only-mobile">
        <div class="g-datetime">
            <p id="time-header"></p>
        </div>

        <div class="only-tablet w" hidden> Portfolio de Brandon Muteau </div>


        <div class="hom-home">

            <div class="hom-project">
                <a href="projet">
                    <img src="src/icon/folder.svg" alt="folder">
                    <p class="hom-text">Mes projets</p>
                </a>
            </div>
            <div class="hom-skills">
                <a href="competence">
                    <img src="src/icon/contact.svg" alt="contact">
                    <p class="hom-text">Mes compétences</p>
                </a>
            </div>
            <div class="hom-who">
                <a href="profil">
                    <img src="src/icon/setting.png" alt="setting">
                    <p class="hom-text">Qui suis-je?</p>
                </a>
            </div>
            <div class="hom-opinion">
                <a href="avis">
                    <img src="src/icon/textnote.svg" alt="textnote">
                    <p class="hom-text l">Avis</p>
                </a>
            </div>
        </div>

        <div class="hom-tools">

            <div class="hom-mail">
                <a href="mailto:muteaub@gmail.com">
                    <img src="src/icon/blue_mail.svg" alt="mail">
                </a>
            </div>
            <div class="hom-blue-github">
                <a href="https://github.com/bmuteau">
                    <img src="src/icon/blue_github.svg" alt="github">
                </a>
            </div>
            <div class="hom-blue-linkedin">
                <a href="https://www.linkedin.com/in/brandon-muteau-a38467169/">
                    <img src="src/icon/blue_linkedin.svg" alt="linkedin">
                </a>
            </div>
        </div>

    </div>

    <div class="only-computer" hidden>
        <div class="hom-container">

            <a href="projet">
                <div class="hom-projects">
                    <img src="src/icon/edge.svg" alt="edge">
                    <p>Mes projets</p>
                </div>
            </a>

            <a href="avis">
                <div class="hom-opinion">
                    <img src="src/icon/word.svg" alt="word">
                    <p>Avis</p>
                </div>
            </a>

            <a href="profil">
                <div class="hom-who">
                    <img src="src/icon/config_user.svg" alt="config user">
                    <p>Qui suis-je?</p>
                </div>
            </a>

            <a href="competence">
                <div class="hom-skill">
                    <img src="src/icon/folder.svg" alt="folder">
                    <p>Mes compétences</p>
                </div>
            </a>

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
    <script src="script/datetimeHeader.js"></script>
</body>

</html>