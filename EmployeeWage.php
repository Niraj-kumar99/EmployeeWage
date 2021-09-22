<?php
$attendance = rand(0,1);
$employeeType = rand(0,1);
$wage_per_hr = 20;
$max_days = 20;
$EmployeeMonthlyWage =0;
//$totalWorkingHr = 0;

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
    //Calculating wage till this condition.
    if($workingHr >= 100 || $i == 20) {
        break;
    }
    $EmployeeWage = $wage_per_hr * $workingHr;
    $EmployeeMonthlyWage += $EmployeeWage;
    $max_days++;
}
echo "Employee Tyoe is ".$type ."\nTotal Working Days: ".$i ."\nTotal Working Hours:".$workingHr ."\nSalary Per Month: ".$EmployeeMonthlyWage;

?>