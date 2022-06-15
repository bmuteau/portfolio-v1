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

    <title>Brandon Muteau - Mes expériences </title>
</head>

<body class="white">

    <div class="onlyMobile">



        <div class="datetime">
            <p id="time" style=" 
                color: black;
                margin-top: 50px;
                margin-left: -5rem;
                font-size: 25px;
            ">
            </p>
        </div>
        <div class="onlyTablet" hidden> Portfolio de Brandon Muteau </div>

        <h1 class="name">Qui suis-je? </h1>
        <a href="../view/home.php" class="close">X</a>

        <h2 class="experience">EXPERIENCES</h2>
        <hr class="hrExperience">
        <ul class="listExperience">
            <!-- Take information in BDD ( name, date and details) -->
            <li>
                <p class="experienceTitle">title</p>
                <p class="experienceDate">2020 - 2021</p>
                <p class="experienceDetails">Details</p>
            </li>
        </ul>

    </div>

    <div class="onlyComputer" hidden>

        <div class="bar">
            <h2 class="experience">EXPERIENCES</h2>
        </div>

        <div class="sideList">
            <img class="star" src="../src/icon/star.svg">
            <p class="starName">Brandon Muteau</p>
            <ul class="sideList__ul">
                <li><a class="b" href="../view/profil.php">Info</a></li>
                <li><a class="b" href="../view/formation.php">Formation</a></li>
                <li><a class="b" href="../view/experience.php">Experience</a></li>
                <li><a class="b" href="../view/hobbie.php">Loisirs</a></li>
            </ul>
        </div>

        <div class="content">
            <ul class="content_list">
                <li>Nom | Date | Lieu | Detail </br>
                    <hr>
                </li>
            </ul>

        </div>

        <div class="taskbar">

            <button class="taskbar__start">
                <img class="taskbar__start--logo" src="../src/icon/windows.png" alt="Windows">
                Brandon
            </button>

            <button class="projects__start">
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

            <button class="who__start ac">
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

            <p id="time">23:23</p>
        </div>


    </div>

</body>

<script src="../script/datetime.js"></script>


</html>