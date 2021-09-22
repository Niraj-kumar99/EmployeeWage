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

}
$employee = new Employee();
$employee->attendance($attendance);

?>