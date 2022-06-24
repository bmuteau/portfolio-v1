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
    <style type="text/css">
        .opinion__start {
            background: #03a9f4;
        }
    </style>

    <title>Brandon Muteau - Vos avis </title>

</head>

<body class="white wo">
    <div class="only-mobile">
        <div class="only-tablet t t-tab" hidden> Portfolio de Brandon Muteau </div>

        <div class="g-datetime">
            <p id="time" class="time-for-tablet" style=" 
                color: black !important;
                margin-top: -5rem;
                margin-left: 37rem;
                font-size: 25px;
            ">
            </p>
        </div>

        <a href="home" class="opi-close">X</a>

        <h1 class="opi-name opi-name-for-tablet">Votre avis m'intéresse ! </h1>
        <form class="opi-form opi-form-tab" method="POST">
            <input type="text" name="firstname" class="opi-surname" placeholder="Prénom">
            <input type="number" name="note" class="opi-note" min="0" max="10" placeholder="Note">
            <input type="email" name="email" class="opi-email" placeholder="E-mail">
            <textarea name="avis" class="opi-opinion textarea-tab " rows="6" cols="50" maxlength="250" placeholder="Votre avis..."></textarea>
            <input type="submit" name="submit" class="opi-submit" placeholder="Envoyer">
        </form>

        <h2 class="opi-name">Vos avis</h2>
        <ul>
            <?php foreach ($avis as $avisList) : ?>
                <?=

                '<li class="opi-list">
                <p class="opi-surname-res">' . $avisList['firstname'] . '</p>
                <p class="opi-avis-res">' . $avisList['avis'] . '</p>
                <p class="opi-note-res">' . $avisList['note'] . '/10</p>
                <hr class="opi-hr opi-hr-tab">
                </li>'
                ?>

            <?php endforeach ?>
        </ul>

    </div>

    <div class="only-computer" hidden>

        <div class="opi-div">

            <div class="opi-div">
                <h2 class="opi-name-for-computer">Vos avis</h2>
                <ul>
                    <?php foreach ($avis as $avisList) : ?>
                        <?=

                        '<li class="opi-list-for-computer">
                        <p class="opi-surname-res">' . $avisList['firstname'] . '</p>
                        <p class="opi-avis-res">' . $avisList['avis'] . '</p>
                        <p class="opi-note-res">' . $avisList['note'] . '/10</p>
                        <hr class="opi-hr">
                        </li>'
                        ?>

                    <?php endforeach ?>
                </ul>
            </div>

            <form class="opi-form" method="POST">
                <input type="text" name="firstname" class="opi-surname" placeholder="Prénom">
                <input type="number" name="note" class="opi-note" min="0" max="10" placeholder="Note">
                <input type="email" name="email" class="opi-email" placeholder="E-mail">
                <textarea name="avis" class="opi-opinion" rows="6" cols="50" maxlength="250" placeholder="Votre avis..."></textarea>
                <input type="submit" name="submit" class="opi-submit" placeholder="Envoyer">
            </form>
        </div>



</body>



</html>