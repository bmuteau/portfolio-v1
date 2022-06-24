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
        .who__start {
            background: #03a9f4;
        }
    </style>

    <title>Brandon Muteau - Mes loisirs </title>
</head>

<body class="white">

    <div class="only-mobile">

        <div class="g-datetime">
            <p id="time" class="time-for-tablet" style=" 
                color: black;
                margin-top: 50px;
                margin-left: -5rem;
                font-size: 25px;
            ">
            </p>
        </div>

        <div class="only-tablet" hidden> Portfolio de Brandon Muteau </div>

        <h1 class="hob-name hob-name-for-tablet">Qui suis-je? </h1>
        <a href="home" class="hob-close">X</a>


        <h2 class="hob">LOISIRS</h2>

        <hr class="hob-hr">
        <ul class="hob-list">

            <?php foreach ($hobbie as $hobbies) : ?>
                <?=
                '<li>
                <img src="src/hobbie/' . $hobbies['image'] . '"  title="' . $hobbies['name'] . '" class="hob-img-tab">' .
                    '<p class="hob-activity hob-activity-tab">' . $hobbies['name'] . '</p>
                </li>'
                ?>

            <?php endforeach ?>

        </ul>


    </div>

    <div class="only-computer" hidden>

        <div class="bar">
            <h2 class="hob">LOISIRS</h2>
        </div>



        <div class="hob-content">
            <ul class="hob-content-list">
                <?php foreach ($hobbie as $hobbies) : ?>
                    <?=
                    '<li class="li-for-computer">
                <img src="src/hobbie/' . $hobbies['image'] . '"  title="' . $hobbies['name'] . '" class="hob-img">
                </li>'
                    ?>

                <?php endforeach ?>

            </ul>


        </div>



</body>



</html>