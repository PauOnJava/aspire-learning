<?
include("includes/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspire</title>
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</head>

<body class="bg-dark">
    <section class="h-100 gradient-form" style="background-color: #3d3c3e;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="media/logo_final_aspire.png" alt="Logo" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Something</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Metrice
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-light" href="#">Interactiuni</a></li>
                                <li><a class="dropdown-item text-light" href="#">Statistici</a></li>
                                <li>
                                    <hr class="dropdown-divider bg-light">
                                </li>
                                <li><a class="dropdown-item text-light" href="*">Cursuri</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="profile.php?profile=1"><img src="media/Sample_User_Icon.png" height="40" alt="404"
                                    class="rounded-circle"></a>
                        </li>
                        <li class="nav-item align-self-center">
                        <a type="button" href="logout.php" class="btn btn-outline-danger">Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>