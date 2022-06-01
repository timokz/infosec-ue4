<?php

require_once("includes.php");

if(isset($_POST['submit']))
{
    $uid = $_POST["uid"];
    $grade = $_POST["grade"];

   $databaseHelper->updateGrade($uid, $grade);

   header("Location: gradeTable.php");
}
?>