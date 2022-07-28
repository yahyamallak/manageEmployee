<?php 


class Employee{

    public static function getAll() {
        $stmt = DB::connect()->prepare('SELECT * FROM employees');
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public static function add($data) {
        $stmt = DB::connect()->prepare('INSERT INTO employees (fullname, department, position, num, stat) VALUES (:fullname, :department, :position, :num, :stat)');
        $stmt->bindParam(':fullname', $data['name']);
        $stmt->bindParam(':department', $data['department']);
        $stmt->bindParam(':position', $data['position']);
        $stmt->bindParam(':num', $data['number']);
        $stmt->bindParam(':stat', $data['status']);
        
        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
    }
}