<?php

require_once("includes.php");

if(isset($_POST['submit'])) {
    $uid = $_POST["uid"];
    $databaseHelper->delStudent($uid);
}


header("Location: studentTable.php");

?>