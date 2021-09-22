<?php
echo "Welcome to employee Wage Prob\n";
$attendance = rand(0,1);
$EmployeeWage =0;
$wage_per_hr =20;
if ($attendance == 0) {
    echo "\n Employee is ABSENT2";
    $workingHr = 0;
}
else {
    echo "\nEmployee is PRESENT";
    $workingHr = 8;
}
$EmployeeWage = $wage_per_hr * $workingHr;
echo ("\nTotal Wage : " .$EmployeeWage);
?>