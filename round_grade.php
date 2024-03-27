<?php

$total_students = $_GET['total_students'];

function gradingStudents(int $value) {
    $next_multiple_5 = ceil($value/5) * 5;

    $diff = $next_multiple_5-$value;

    if ($diff < 3 && $value >= 38) {
        $value = $next_multiple_5;
    } else {
        $value = $value;
    }

return $value;
}

?>

<html>
<body>
Number of Students: <?php echo $total_students . '<br>' ?>
<br>

<?php
$number = 1;

foreach($_GET['grade'] as $grade) {
    $grade = gradingStudents($grade);
    echo 'Final Grade of Student ' . $number++ . " = " . $grade. "<br>";

    if ($grade < 0 || $grade > 100) {
        echo '<script>';
        echo 'alert("Input grade of each student between 0 - 100")';
        echo '</script>';
        echo '<script>';
        echo 'window.history.back()';
        echo '</script>';
    }
}

?>

<br>
<a href="index.php">Back to Home</a>

</script>
</body>
</html>