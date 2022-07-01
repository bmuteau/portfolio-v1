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

    <link rel="apple-touch-icon" sizes="180x180" href="src/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/favicon/favicon-16x16.png">

    <style type="text/css">
        .who__start {
            background: #03a9f4;
        }
    </style>

    <title>Brandon Muteau - Mes formations </title>
</head>

<body class="white">
    <div class="only-mobile">
        <div class="g-datetime">
            <p id="time" class="time-for-tablet">
            </p>
        </div>
        <div class="only-tablet" hidden> Portfolio de Brandon Muteau </div>

        <h1 class="for-name for-name-for-tablet">Qui suis-je? </h1>
        <a href="home" class="for-close">X</a>



        <h2 class="for">FORMATIONS</h2>
        <hr class="for-hr">

        <ul class="for-list">
            <?php foreach ($formation as $formations) : ?>
                <?=
                '<li>
                <p>' . $formations['name'] . '</p>
                <p>' . $formations['start'] . ' - ' . $formations['end'] . '</p>
                </li>'
                ?>

            <?php endforeach ?>

        </ul>

    </div>


    <div class="only-computer" hidden>

        <div class="bar">
            <h2 class="for-computer">FORMATIONS</h2>
        </div>




        <div class="for-content">
            <ul class="for-content-list">
                <?php foreach ($formation as $formations) : ?>
                    <?=
                    '<li class="li-for-computer">' . $formations['name'] . '|' . $formations['start'] . ' - ' . $formations['end'] . '</li>'
                    ?>

                <?php endforeach ?>


            </ul>

        </div>


</body>



</html>