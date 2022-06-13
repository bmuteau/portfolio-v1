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

    <h1 class="name">Votre avis m'intéresse !  </h1>
    <form class="formOpinion">
        <input type="text" name="surname" class="surnameInput" placeholder="Prénom">
        <input type="number" name="note" class="noteInput" min="0" max="10" placeholder="Note">
        <input type="email" name="email" class="emailInput" placeholder="E-mail">        
        <textarea name="opinion" class="opinionInput" rows="6" cols="50" maxlength="250"placeholder="Votre avis..."></textarea>
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

</body>

<script src="../script/datetime.js"></script>


</html>