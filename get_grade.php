<?php

    $total_students = $_GET["total_students"];

    if ($total_students < 1 || $total_students > 60) {
        echo '<script>';
        echo 'alert("Input number of students between 1 - 60");';
        echo '</script>';
        echo '<script>';
        echo 'window.history.back()';
        echo '</script>';
    }

    function getGrade(int $total_students) {

        for($i=1; $i<=$total_students; $i++) {
            echo "Original Grade of Student $i: <input type='number' name='grade[$i]' required><br>";
        }
    }

?>

<html>
<body>

<?php
echo "Number of Students: " . $total_students . "<br> <br>";
echo "<form action='round_grade.php' method='GET'>";
getGrade($total_students);
echo "<input type='hidden' value='$total_students' name='total_students'>" . "<br>";
echo "<input type='submit' value='Round Grades'>" . "<br> <br>";
echo "<a href='index.php'>Back to Home</a>";
echo "</form>";

?>

</body>
</html>
