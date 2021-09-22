<?php
$attendance = rand(0,1);
$employeeType = rand(0,1);
$wage_per_hr = 20;

if ($attendance == 1){
    switch($employeeType) {
        case 0:
            echo "\nPart Time Employee";
            $workingHr = 4;
            break;
        case 1:
            echo "\nFull Time Employee";
            $workingHr = 8;
    }
}
else {
    echo "\nEmployee is ABSENT";
}
$EmployeeWage = $wage_per_hr * $workingHr;
echo ("\nTotal Wage : " .$EmployeeWage);
?>