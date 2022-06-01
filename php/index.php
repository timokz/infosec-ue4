<?php

    require_once("includes.php");

    if(!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
        header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Infsec UE Demonstration-Site</title>
    <?php require_once("htmlIncludes.php") ?> 

    <style>
        .row.content {
            height: 450px
        }

        @media screen and (max-width: 767px) {
            .row.content {
                height: auto;
            }
        }
    </style>
</head>

<body>
    <div class="p-5 bg-dark text-white text-center">
        <h1>Welcome, <?php echo $_SESSION["uid"] ?>!</h1>
    </div>

    <?php require_once("navbar.php"); ?>

    <div class="container">
        <div class="row">
        </div>
        <div class="row">
        </div>
    </div>
</body>

</html>