<?php

session_start();

if ($_POST) {
    // le tableau contient des données

    // verification de l'existence de la clé 'password' dans le tableau $_POST
    if(isset($_POST['password'])) {
        // la clé 'password' existe

        if($_POST['password'] == '123') {
            // le mot est correct

            $_SESSION['connected'] = true;

            // redirection temporaire 
            $url = '/private-page.php';
            header("Location: $url", 302);
            exit();
        }
    }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/login.php" method="post">
        <input type="name" name="password" placeholder="password">
        <button type="submit">ok</button>
    </form>
</body>
</html>