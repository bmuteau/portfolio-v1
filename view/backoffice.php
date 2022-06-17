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

    <title>Mon backoffice </title>
</head>

<body class="backoffice">
    <!-- ONGLET DEPLIANT : 
            AJouter une stack 
            Ajouter un projet
            Ajouter une formation
            Ajouter une experience
            Ajouter un hobbie
    -->


    <div class="bo-principal-div">
        <div class="bo-add-stack">
            <h1>Ajouter une stack ! </h1>
            <form method="POST" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Nom de la stack"></br>
                <input type="file" name="logo"></br>
                <input type="submit" name="submit-stack">
            </form>
        </div>
    </div>

</body>

</html>