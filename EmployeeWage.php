<?php
$attendance = rand(0,1);
$employeeType = rand(0,1);
class Employee {
    public $wage_per_hr =20;
    function attendance($attendance) {
        if ($attendance == 0) {
            echo "Employee is ABSENT\n";
        }
        else {
            echo "Employee is PRESENT\n";
        }
    }

    //Calculating daily wage
    function calculateDailyWage($attendance , $employeeType) {
        //$wage_per_hr =20;
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
        $EmployeeWage = $this->wage_per_hr * $workingHr;
        echo "Daily wage .........\n";
        echo "Employee Type : ".$type ."\nEmployee Daily Wage is :".$EmployeeWage;
    }

    //Calculating daily wage per month
    function calculateMonthlyWage($attendance , $employeeType) {
        $max_days = 20;
        $EmployeeMonthlyWage = 0;
        if($attendance == 1){
            for($i=0 ; $i<$max_days; $i++) {
                switch($employeeType) {
                    case 0:
                        $type = "Part Time Employee";
                        $workingHr = 4;
                        break;
                    case 1:
                        $type = "Full Time Employee";
                        $workingHr = 8;
                        break;
                    default:
                        $workingHr = 0;
                    }
                    $EmployeeWage = $this->wage_per_hr * $workingHr;
                    $EmployeeMonthlyWage += $EmployeeWage;
                }
                echo "\nMonthly wage ......";
                echo ("\nMonthly wage of : ".$type ."\nMonthly Wage is : ".$EmployeeMonthlyWage);
            }
            else {
                echo "\nMonthly wage ......";
                echo "\nEmployee is Absent";
            }
        }

}

$employee = new Employee();
$employee->attendance($attendance);
$employee->calculateDailyWage($attendance , $employeeType);
$employee->calculateMonthlyWage($attendance , $employeeType);

?>