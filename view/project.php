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

    <title>Brandon Muteau - Mes projets</title>
</head>

<body class="white proj_edge">
    <div class="onlyMobile">
        <div class="datetime">
            <p id="time" style=" 
                color: black!important;
                margin-top: 0px;
                margin-left: 40rem;
                font-size: 25px;
            ">
            </p>
        </div>
        <div class="onlyTablet " hidden> Portfolio de Brandon Muteau </div>

        <h1 class="name">Mes projets</h1>
        <a href="../view/home.php" class="close">X</a>


        <form method="">
            <button class="search-button" type='submit'><span class='icone-loupe'><img class="loupe" src="../src/icon/find_loupe.svg"></span></button>
            <input type="text" name="search" placeholder="Rechercher un projet" class="search">
        </form>

        <div class="projectList">
            <!-- Remplacer par une boucle for avec les projets trouvé en BDD -->
            <div class="projectItem">
                <a href="../view/projectProfil.php:id">
                    <img src="../src/icon/drive.svg" alt="drive">
                    <p class="texts">Projet</p>
                </a>
            </div>
            <div class="projectItem2">


            </div>
        </div>

        <div class="onlyComputer" hidden>

            <h1 class="name">Mes projets</h1>

            <form class="search_bar" method="">
                <input type="text" name="search" placeholder="Rechercher un projet" class="search">
                <button class="search-button" type='submit'><span class='icone-loupe'><img class="loupe" src="../src/icon/find_loupe.svg"></span></button>
            </form>
            <!-- Quand une recherche est faite, basculer sur une page blanche avec les resultats(pas de redirection vers projectProfil) -->

            <div class="lastProject">
                <ul class="proj_list">
                    <li>
                        <a href="../view/projectProfil.php:id">
                            <img class="proj_logo" src="../src/icon/drive.svg" alt="drive">
                            <p class="texts">Projet</p>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="taskbar">

                <button class="taskbar__start">
                    <img class="taskbar__start--logo" src="../src/icon/windows.png" alt="Windows">
                    Brandon
                </button>

                <button class="projects__start ac">
                    <img class="projects__start--logo" src="../src/icon/edge.svg" alt="edge">
                    <a href="../view/project.php">
                        Mes projets
                    </a>
                </button>

                <button class="opinion__start">
                    <img class="opinion__start--logo" src="../src/icon/word.svg" alt="word">
                    <a href="../view/opinion.php">
                        Avis
                    </a>
                </button>

                <button class="who__start ">
                    <img class="who__start--logo" src="../src/icon/config_user.svg" alt="user">
                    <a href="../view/profil.php">
                        Qui suis-je?
                    </a>
                </button>

                <button class="skill__start">
                    <img class="skill__start--logo" src="../src/icon/folder.svg" alt="folder">
                    <a href="../view/skill.php">
                        Mes compétences
                    </a>
                </button>

                <div class="logo__start">
                    <a href="https://github.com/bmuteau"> <img class="github__start" src="../src/icon/black_github.svg" alt="github"></a>
                    <a href="https://www.linkedin.com/in/brandon-muteau-a38467169/"> <img class="linkedin__start" src="../src/icon/black_linkedin.svg" alt="linkedin"></a>
                    <a href="mailto:muteaub@gmail.com"> <img class="mail__start" src="../src/icon/blue_mail.svg" alt="mail"></a>
                </div>

                <p id="timeComputer"></p>
            </div>


        </div>

</body>

<script src="../script/datetime.js"></script>


</html>