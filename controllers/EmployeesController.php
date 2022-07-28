<?php

class EmployeesController {

    public function getAllEmployees() {
        $employees = Employee::getAll();

        return $employees;
    }

    public function addEmployee() {
        if(isset($_POST['submit'])){
            $data = array(
                'fullname'=> $_POST['fullname'],
                'department'=> $_POST['department'],
                'position'=> $_POST['position'],
                'num'=> $_POST['num'],
                'stat'=> $_POST['stat'],
            );

            $result = Employee::add($data);

            if($result === 'ok') {
                header('location:'. BASE_URL);
            } else {
                echo $result;
            }

        }
    }
}