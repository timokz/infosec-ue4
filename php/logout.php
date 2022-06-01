<?php

    require_once("includes.php");
    unset($_SESSION["loggedin"]);
    unset($_SESSION["isAdmin"]);
    unset($_SESSION["uid"]);

    session_destroy();

    header("Location: login.php");
?>