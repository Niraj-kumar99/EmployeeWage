<?php
echo "Welcome to employee Wage Prob\n";
$attendance = rand(0,1);
if ($attendance == 0) {
    echo "Employee is ABSENT\n";
}
else {
    echo "Employee is PRESENT\n";
}
?>