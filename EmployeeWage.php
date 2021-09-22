<?php
$attendance = rand(0,1);
$employeeType = rand(0,1);
class Employee {
    function attendance($attendance) {
        if ($attendance == 0) {
            echo "Employee is ABSENT\n";
        }
        else {
            echo "Employee is PRESENT\n";
        }
    }

    function calculateWage($attendance , $employeeType) {
        $wage_per_hr =20;
        if ($attendance == 1) {
            if ($employeeType == 0) {
                $type = "Part Time Employee";
                $workingHr = 4;
            }
            else {
                $type = "Full Time Employee";
                $workingHr = 8;
            }
        }
        else {
            $type = "Employee is ABSENT";
            $workingHr = 0;
        }
        $EmployeeWage = $wage_per_hr * $workingHr;
        echo "Employee Type : ".$type ."\nEmployee Wage is :".$EmployeeWage;
    }

}
$employee = new Employee();
$employee->attendance($attendance);
$employee->calculateWage($attendance , $employeeType);

?>