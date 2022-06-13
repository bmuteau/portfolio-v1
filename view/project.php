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

<body class="white">

    <div class="datetime">
        <p 
            id="time"
            style=" 
                color: black;
                margin-top: -24px;
                margin-left: -265px;
                font-size: 25px;
            ">
        </p>
    </div>

    <h1 class="name">Mes projets</h1>

    <form method="">
        <button class="search-button" type='submit'><span class='icone-loupe'><img src="../src/icon/find_loupe.svg"></span></button>
        <input type="text" name="search" placeholder="Rechercher un projet" class="search">
    </form>

    <div class="projectList">
        <!-- Remplacer par une boucle for avec les projets trouvé en BDD -->
        <div class="projectItem">
            <a href="">
            <img src="../src/icon/drive.svg" alt="drive">
            <p class="texts">Projet</p>
            </a>
        </div>
        <div class="projectItem2">
            <a href="">
            <img src="../src/icon/drive.svg" alt="drive">
            <p class="texts">Projet</p>
            </a>
        </div>
        <div class="projectItem3">
            <a href="">
            <img src="../src/icon/drive.svg" alt="drive">
            <p class="texts">Projet</p>
            </a>
        </div>
        
    </div>

</body>

<script src="../script/datetime.js"></script>


</html>