<?php 
        if(isset($_POST['submit'])) {
            $newEmployee = new EmployeesController();
            $newEmployee->addEmployee();
        }
?>

<form action="" method="POST">
    <input type="text" name="fullname" placeholder="name"><br>
    <input type="text" name="department" placeholder="department"><br>
    <input type="text" name="position" placeholder="position"><br>
    <input type="text" name="num" placeholder="number"><br>
    <select name="stat">
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select><br>
    <input type="submit" value="Add">
</form>