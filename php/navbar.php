<?php

require_once("includes.php");
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="gradeTable.php">Grades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="studentTable.php">Students</a>
            </li>

            <?php if ($_SESSION['isAdmin']) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="userTable.php">Users</a>
                </li>
            <?php } ?>

            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>

        </ul>
    </div>
</nav>