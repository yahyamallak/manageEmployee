<?php

    $data = new EmployeesController();
    $employees = $data->getAllEmployees();

?>
<div class="container">
    <a href="<?php echo BASE_URL;?>add"><div>Add</div></a>
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Department</th>
                <th>Position</th>
                <th>Number</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    foreach ($employees as $employee):
                ?>
                <td><?php echo $employee['name']; ?></td>
                <td><?php echo $employee['department']; ?></td>
                <td><?php echo $employee['position']; ?></td>
                <td><?php echo $employee['number']; ?></td>
                <td><?php echo $employee['date']; ?></td>
                <td><?php echo $employee['status'] === 1 ? 'Active' : 'Inactive'; ?></td>
                <td>
                    <form action="update" method="post">
                        <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
                        <button type="submit">Update</button>
                    </form>
                    <form action="delete" method="post">
                        <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <?php endforeach;  ?>
            </tr>
        </tbody>
    </table>
</div>