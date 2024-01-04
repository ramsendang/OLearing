<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Learing Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./frontend/src/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./frontend/src/js/script.js"></script>
  </head>
  <body>
    <div class="row d-flex justify-content-center bg-light">
        <div class="col-10">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Olearing</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                        
                        <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle bord" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                                if(empty($_SESSION["user_id"])){
                                    ?>
                                        Profile
                                    <?php
                                }else{
                                    echo $_SESSION["username"];
                                }
                            ?>
                        </button>
                        <ul class="dropdown-menu">
                            <?php
                                if(empty($_SESSION["user_id"])){
                                    ?>
                                        <li><a class="dropdown-item" href="./login.php">Login</a></li>
                                        <li><a class="dropdown-item" href="./register.php">Sign up</a></li>
                                    <?php
                                }else if($_SESSION["roleid"]==2){
                                        ?>
                                        <li><a class="dropdown-item" href="./dashboard.php">Dashboard</a></li>
                                        <li><a class="dropdown-item" href="./frontend/controller/logoutController.php">Log out</a></li>
                                        <?
                                    ?>                                               
                                    <?php
                                }else{
                                    ?>
                                    <li><a class="dropdown-item" href="./frontend/controller/logoutController.php">Log out</a></li>
                                    <?php
                                }
                            ?>
                            
                            
                        </ul>
                        </div>
                    </div>
                </div>
            </nav>
        
        </div>
    </div>