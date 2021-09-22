<?php

class Employee {
    
    function calculateWage($companyName , $wage_per_hr , $max_days) {
        $EmployeeMonthlyWage = 0;
        $workingHr = 0;

        for($i=1 ; $i<$max_days; $i++) {
            $employeeType = rand(0,1);
            switch($employeeType) {
                case 0:
                    $type = "Part Time Employee";
                    $empWorkingHr = 4;
                    break;
                case 1:
                    $type = "Full Time Employee";
                    $empWorkingHr = 8;
                    break;
            }

            //Calculating wage till this condition.
            if($workingHr >= 100 || $i == 20) {
                break;
        }
            $EmployeeWage = $wage_per_hr * $empWorkingHr;
            $EmployeeMonthlyWage += $EmployeeWage;
            $workingHr += $empWorkingHr;
        }

        //Array
        $companyDetails = array("Company Name" =>$companyName ,"Total working days"=>$i ,
                                "Total working Hours"=>$workingHr ,"Salary Per Month"=>$EmployeeMonthlyWage);
        print_r($companyDetails);
    }
}
$employee = new Employee();
$employee->calculateWage("Tata" , "60" , "20");
$employee->calculateWage("Asus" , "50" , "30");
$employee->calculateWage("Dell" , "80" , "22");
$employee->calculateWage("Wipro" , "65" , "25");
$employee->calculateWage("Acenture" , "75" , "18");
?>