<?php
$attendance = rand(0,1);
$employeeType = rand(0,1);
$wage_per_hr = 20;
$max_days = 20;
$EmployeeMonthlyWage = 0;
$MaxWorkingHr = 100;
//Calculating daily wage per month
for($i=0 ; $i<$max_days; $i++) {
    switch($employeeType) {
        case 0:
            $type = "Part Time";
            $workingHr = 4;
            break;
        case 1:
            $type = "Full Time";
            $workingHr = 8;
            break;
        default:
            $workingHr = 0;
    }
    $EmployeeWage = $wage_per_hr * $workingHr;
    $EmployeeMonthlyWage += $EmployeeWage;
}
echo ("\nEmployee type is : ".$type ."\nMonthly Wage is : ".$EmployeeMonthlyWage);
?>