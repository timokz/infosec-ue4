<?php

require_once("includes.php");

$flag = false;

if ( isset($_SESSION['isAdmin']) ){
    $flag = $_SESSION["isAdmin"] == 1;
}

?>
<script>
    function deleteTag(uid) {
        
        document.getElementById("uid").value = uid;
        document.getElementById("submit").click();


    }
</script>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

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
    <h1>InfSec Students</h1>
</div>

<?php require_once("navbar.php"); ?>

<!-- Student Table: -->
<div class="container">
    <div class="row">
        <h3>InfSec Students</h3>

        <div class="container">
            <div class="table-responsive">
            <form action="delStudent.php" method="POST" id="mainForm">
                <table class="table table-hover">
                    <input type="hidden" name="uid" id="uid" value="">
                    <input type="submit" name="submit" value="1" id="submit" style="display:none" /> 
                    <thead>
                    <tr>
                        <th>uID</th>
                        <th>Name</th>
                        <?php if($flag) { ?>
                            <th>Delete</th>
                        <?php }?>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $upcoming = $databaseHelper->getStudents();
                    foreach ($upcoming as $item) : ?>
                        <tr>
                            <td><?php echo $item['matrnr']; ?>  </td>
                            <td><?php echo $item['firstname'] . " " . $item['lastname']; ?>  </td>

                            <?php if($flag) { ?>
                            <td><input type="button" value="x" onclick=deleteTag('<?= $item["uid"]; ?>')></td>
                            <?php }?>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
               </form
            </div>
        </div>
    </div>
</div>
</body>

</html>