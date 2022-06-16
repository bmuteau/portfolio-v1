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

    <title>Brandon Muteau - Mes expériences </title>
</head>

<body class="white">

    <div class="only-mobile">



        <div class="g-datetime">
            <p id="time" style=" 
                color: black;
                margin-top: 50px;
                margin-left: -5rem;
                font-size: 25px;
            ">
            </p>
        </div>
        <div class="only-tablet" hidden> Portfolio de Brandon Muteau </div>

        <h1 class="exp-name">Qui suis-je? </h1>
        <a href="home" class="exp-close">X</a>

        <h2 class="exp">EXPERIENCES</h2>
        <hr class="exp-hr">
        <ul class="exp-list">
            <?php foreach ($job as $jobs) : ?>
                <?=
                '<li>
                <p>' . $jobs['name'] . ' | ' . $jobs['place'] . '</p>
                <p>' . $jobs['start'] . ' - ' . $jobs['end'] . '</p>
                <p>' . $jobs['detail'] . '</p>
                </li>'
                ?>

            <?php endforeach ?>
        </ul>


    </div>

    <div class="only-computer" hidden>

        <div class="bar">
            <h2 class="exp">EXPERIENCES</h2>
        </div>


        <div class="exp-content">
            <ul class="content_list">
                <?php foreach ($job as $jobs) : ?>
                    <?=
                    '<li>' . $jobs['name'] . ' | ' . $jobs['start'] . ' - ' . $jobs['end'] . '</br>' .
                        $jobs['detail'] . '</br>' .
                        $jobs['place'] . ' | ' . $jobs['company'] . '</li>'
                    ?>
                <?php endforeach ?>
            </ul>



        </div>

</body>



</html>