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

    <title>Go to backoffice </title>
</head>

<body class="backoffice">

    <h1>Login</h1>
    <form method="POST" class="log-login">
        <label for="username">Email: </label></br>
        <input type="email" name="mail" id="email" placeholder="Email"></br>
        <label for="password">Password: </label></br>
        <input type="password" name="password" id="password" placeholder="Password"> </br>
        <input type="submit" name="login" class="log-submit" value="Login">
    </form>

    <?php
    if ($result > 0) {
    ?>
        <div class="error2"><?= $error ?></div>
    <?php
    }
    ?>

    <a href="home"> -> Tu t'es perdu? <- </a>
</body>

</html>