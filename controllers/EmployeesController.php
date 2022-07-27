<?php

class EmployeesController {

    public function getAllEmployees() {
        $employees = Employee::getAll();

        return $employees;
    }
}