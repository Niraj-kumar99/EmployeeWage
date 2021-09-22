<?php
$attendance = rand(0,1);
$employeeType = rand(0,1);
$wage_per_hr = 20;

if ($attendance == 1) {
    if ($employeeType == 0) {
        echo "Part Time Employee";
        $workingHr = 4;
    }
    else {
        echo "Full Time Employee";
        $workingHr = 8;
    }
}
else {
    echo "\nEmployee is ABSENT";
}
$EmployeeWage = $wage_per_hr * $workingHr;
echo ("\nTotal Wage : " .$EmployeeWage);
?>