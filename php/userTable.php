<?php
require_once("includes.php");

$flag = false;

if (isset($_SESSION['isAdmin'])) {
    $flag = $_SESSION["isAdmin"] == 1;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Grades</title>
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
    <h1>Student Grades</h1>
</div>

<?php require_once("navbar.php"); ?>

<!-- User Table: -->
<div class="container">
    <div class="row">
        <h3>Grades</h3>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>userID</th>
                        <th>Hashed Password</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $upcoming = $databaseHelper->getUsers();
                    foreach ($upcoming as $item) : ?>

                            <tr>
                                <td><?php echo $item['uid']; ?>  </td>
                                <td><?php echo $item['password'] ?>  </td>
                            </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>

</html>