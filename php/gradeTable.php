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

<script>
    function updateGradeVal(grade, uid) {
        console.log(uid)
        document.getElementById("grade").value = grade;
        document.getElementById("uid").value = uid;
    }
</script>

<!-- Grade Table: -->
<div class="container">
    <div class="row">
        <h3>Grades</h3>
        <div class="container">
        <form action="updateGrade.php" method="POST" id="mainForm">       
            <input type="hidden" name="uid" id="uid" value="">
            <input type="hidden" name="grade" id="grade" value="5">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>uID</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Student Grade</th>
                        <?php if($flag) { ?>
                            <th>Submit Grade</th>
                        <?php }?>
                    </tr>
                    </thead>
                    <tbody>



                        <?php $upcoming = $databaseHelper->getGrades();
                        $index = 0;
                        foreach ($upcoming as $item) : 
                            ++$index;
                        ?>
                            <tr>
                                <td><?php echo $item['uid']; ?>  </td>
                                <td><?php echo $item['matrnr']; ?>  </td>
                                <td><?php echo $item['firstname'] . " " . $item['lastname']; ?>  </td>
                                <?php if($flag) { ?>
                                    <td>
                                        <input type="number" class="form-control" name="grade_input<?= $index ?>" id="grade_input<?= $index ?>"
                                               value=<?php echo $item['grade'] ?> min="0" max="5"
                                               onchange="updateGradeVal(this.value, '<?= $item['uid'] ?>')">
                                    </td>
                                <?php }?>
                                <?php if(!$flag) { ?>
                                    <td>
                                        <input type="number" class="form-control" readonly="readonly" name="grade_input" id="grade_input"
                                               value=<?php echo $item['grade'] ?> min="0" max="5"
                                               onchange="updateGradeVal(this.value, '<?= $item['uid'] ?>')">
                                    </td>
                                <?php }?>


                                <?php if($flag) { ?>
                                    <td>
                                        <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
                                    </td>
                                <?php }?>
                            </tr>
                        <?php endforeach; ?>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>

</html>