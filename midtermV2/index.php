<?php
session_start();

$file_path = './json/users.json';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $contents = file_get_contents($file_path);
    $php_array=json_decode($contents, true);

    foreach ($php_array["users"] as $user) {
        if($user["username"] == $_GET["username"] && $user["password"] == $_GET["password"]) {
            $_SESSION["username"] = $user["username"];
        }
    }
}

if(!isset($_SESSION['username'])){
  header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Noah Grant">
        <meta name="description" content="Midterm">
        <meta name="robots" content="noindex">
        <meta http-equiz="pragma" content="no-cache">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href='css/style.css' rel='stylesheet'>
        <title>Home</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.php">Project Website</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="./php/logout.php">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main id="page" class="container">
            <h1>Members Only</h1>
            <p>Hello world</p>
        </main>
        <footer>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>