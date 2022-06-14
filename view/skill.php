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

    <title>Brandon Muteau - Mes compétences</title>
</head>

<body class="white">

    <div class="datetime">
        <p id="time" style=" 
                color: black;
                margin-top: 50px;
                margin-left: -5rem;
                font-size: 25px;
            ">
        </p>
    </div>

    <h1 class="name">Mes compétences</h1>

    <form method="">
        <button class="search-button" type='submit'><span class='icone-loupe'><img src="../src/icon/find_loupe.svg"></span></button>
        <input type="text" name="search" placeholder="Rechercher une compétences" class="search">
    </form>

    <div id="circle">
        <p class="circleText">BM</p>
    </div>
    <div class="info">
        <p class="staticName">Brandon Muteau</p>
        <p class="mySkills">Mes stacks maitrisés</p>
    </div>

    <hr>

    <ul class="stackList">
        <h2>Mes stacks: </h2>
        <li class="stackItem">
            <img src="../src/icon/badge_html.svg" class="imgStack" alt="html">Nom de la stack
        </li>
    </ul>

</body>

<script src="../script/datetime.js"></script>


</html>