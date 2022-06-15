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

    <title>Brandon Muteau Portfolio V1</title>
</head>

<body class="home log">
    <div class="onlyMobile">
        <h1 class="title">Portfolio de Brandon Muteau</h1>

        <div class="datetime">
            <p id="time"></p>
            <p id="date"></p>
        </div>

        <a href="home"><img src="src/icon/lock.svg" class="lock"></a>
        <div class="logo">
            <a href="https://github.com/bmuteau/"><img src="src/icon/black_github.svg" class="black_github"></a>
            <a href="https://www.linkedin.com/in/brandon-muteau-a38467169/"><img src="src/icon/black_linkedin.svg" class="black_linkedin"></a>
        </div>

    </div>

    <div class="onlyComputer" hidden>

        <div class="goToHome"><a href="home" title="Clique pour accéder à mon portfolio">Se connecter ! </a></div>

    </div>
</body>

<script src="script/datetime.js"></script>
<script src="script/date.js"></script>

</html>