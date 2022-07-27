<?php 


class Employee{

    public static function getAll() {
        $stmt = DB::connect()->prepare('SELECT * FROM employees');
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
}