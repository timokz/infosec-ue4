<?php

    require_once("includes.php");

    $error = false;
    $errorMsg = "";

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) {
        header("Location: index.php");
    }

    try {

        if(isset($_POST["submit"])) {

            //the dangerous way, unsanitized
            $uaccount = $_POST["uaccountName"];
            $password = $_POST["password"];

            //the better way, sanitized
            // $uaccount = databaseHelper->sanitize($_POST["uaccountName"]);
            // $uaccount = databaseHelper->sanitize($_POST["password"]);

            if(empty($_POST["uaccountName"]) || empty($_POST["password"])) {
                throw new Exception("Bitte u:account und Passwort eingeben!");
            }

            $loginData = $databaseHelper->login($uaccount, $password);

            if($loginData[0]) {

                $_SESSION["loggedin"] = true;
                $_SESSION["isAdmin"] = $loginData[1];
                $_SESSION["uid"] = $loginData[2];
                header("Location: index.php");

            } else throw new Exception("Falsche Login Daten");


        }
    
    } catch (Exception $e) {

        $error = true;
        $errorMsg = $e->getMessage();

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
    <div class="p-5 mb-5 bg-dark text-white text-center">
        <h1>Infosec Noten</h1>
    </div>

    <div>
    </div>

    <div class="container">
        <div class="row">
            <h3>Login</h3>
        </div>
        <div class="row">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="uaccountName">u:account Name</label>
                    <input type="text" class="form-control" id="uaccountName" placeholder="u:account Name" name="uaccountName" />
                </div>
                <div class="form-group">
                    <label for="password">Passwort</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" />
                </div>
                <button type="submit" class="btn btn-primary mt-2" name="submit">Einloggen</button>
                </form>
        </div>
        <?php 
            if($error) {
                ?>
                <div class="row mt-4">
                    <div class="alert alert-danger" role="alert">
                        <?php echo $errorMsg ?>
                    </div>
                </div>
                <?php
                }
            ?>
    </div>
</body>

</html>