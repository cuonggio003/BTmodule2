
<?php

include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 12);
$circleTwo = new ComparableCircle('circleTwo', 4);
$circleThree = new ComparableCircle('circleThree', 8);

$test = $circleOne->compareTo($circleTwo);
echo ('Comparable: <br>');
echo $test;
?>