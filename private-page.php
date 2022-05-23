<?php

session_start();

if(!isset($_SESSION['connected']) || $_SESSION['connected'] != true) {
    $url = '/login.php';
    header("Location: {$url}", 302);
    exit();
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page priveé</title>
</head>
<body>
    <h1>Page priveé</h1>
    <p>
        <a href="/logout.php">se déconnecter</a>
    </p>
</body>
</html>