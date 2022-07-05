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

    <title>Mon backoffice </title>
</head>

<body class="backoffice">

    <h1> BACK-OFFICE </h1>
    <div class="bo-wrapper">
        <div class="bo-principal-div">

            <div class="bo-add-stack">
                <h2>Ajouter une stack ! </h2>
                <button id="togg1">+</button>
                <form style="display:none;" class="bo-form" id="sta-tog" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Nom de la stack"></br>
                    <input class="bo-files" type="file" name="sta-logo"></br>
                    <input type="submit" class="bo-submit" name="submit-stack">
                </form>
            </div>

            <div class="bo-add-project">
                <h2>Ajouter un projet ! </h2>
                <button id="togg2">+</button>
                <form class="bo-form" style="display:none;" id="pro-tog" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Nom du projet" /></br></br>
                    <textarea name="desc" placeholder="Description"></textarea></br>
                    <input class="bo-files" type="file" name="pro-logo"></br>
                    <input type="number" name="duration" placeholder="Durée"></br></br>
                    <select name="type">
                        <option value="Professionnel">Professionnel</option>
                        <option value="Personnelle">Personnelle</option>
                    </select><br>
                    <input type="text" name="link" placeholder="Lien du projet"></br></br>
                    <legend>Veuillez sélectionner les stacks utilisés :</legend><br>
                    <!-- boucle sur les stacks existantes -->
                    <div>
                        <?php
                        for ($i = 0; $i < count($stackItem); $i++) {
                            echo '<input type="checkbox" name="stack[]" value="' . $stackItem[$i]['id'] . '">' . $stackItem[$i]['name'] . '<br>';
                        }

                        ?>

                    </div>
                    <input type="submit" class="bo-submit" name="submit-project">
                </form>
            </div>

            <div class="bo-add-formation">
                <h2>Ajouter une formation ! </h2>
                <button id="togg3">+</button>

                <form class="bo-form" style="display:none;" id="for-tog" method="POST">
                    <input type="text" name="name" placeholder="Intitulé"></br>
                    <input type="number" name="for-start-date" placeholder="Année de début"></br>
                    <input type="number" name="for-end-date" placeholder="Année de fin"></br>
                    <input type="submit" class="bo-submit" name="submit-formation">
                </form>
            </div>

            <div class="bo-add-exp">
                <h2>Ajouter une expérience ! </h2>
                <button id="togg4">+</button>
                <form class="bo-form" id="exp-tog" style="display:none;" method="POST">
                    <input type="text" name="name" placeholder="Intitulé du poste"></br>
                    <input type="number" name="exp-start-date" placeholder="Année de début"></br>
                    <input type="number" name="exp-end-date" placeholder="Année de fin"></br></br>
                    <textarea name="detail" placeholder="Détail de l'expérience"></textarea></br>
                    <input type="text" name="company" placeholder="Nom de l'entreprise"></br>
                    <input type="text" name="place" placeholder="Ville, pays"></br>
                    <input type="submit" class="bo-submit" name="submit-experience">
                </form>
            </div>

            <div class="bo-add-hob">
                <h2>Ajouter un hobbie ! </h2>
                <button id="togg5">+</button>
                <form class="bo-form" id="hob-tog" style="display:none;" method="POST" enctype="multipart/form-data">
                    <input class="bo-files" type="file" name="image"></br>
                    <input type="text" name="name" placeholder="Nom"></br>
                    <input type="submit" class="bo-submit" name="submit-hob">
                </form>
            </div>

        </div>

        <div class="bo-second-div">
            <div class="bo-last-avis">






                <!--  -->

                <?php

                foreach ($avis as $aviss) : ?>

                    <?=

                    '<div class="bo-avis">
        <a href="backoffice?id=' . $aviss['id'] . '"> X </a> </br>
        <div class="bo-user-id">
        <p>' . $aviss['firstname'] . '</p>
        <p>' . $aviss['note'] . '</p>
        <p>' . $aviss['id'] . '</p><br>
        </div>
        <p class="bo-user-mail">' . $aviss['email'] . '</p>
        <p>' . $aviss['avis'] . '</p>
    </div>'

                    ?>

                <?php endforeach ?>



            </div>
        </div>
    </div>

</body>

<script src="script/boDisplay.js"></script>



</html>