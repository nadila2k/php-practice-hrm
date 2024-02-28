<?php include "../partials/header.php"; ?>

<div class="content">
    <div class="wrapper">
        <h1>Hr Menu</h1>
        <br>
        <br>
        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone NO</th>
                <th>Department</th>
                <th>Designation</th>
                <th>EPF NO</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "Select*from employee";
            $res = mysqli_query($conn, $sql);
            while ($rows = mysqli_fetch_assoc($res)) {
                $id = $rows['id'];
                $name = $rows['empName'];
                $age = $rows['age'];
                $email = $rows['email'];
                $address = $rows['address'];
                $phone = $rows['phone'];
                $department = $rows['department'];
                $designation = $rows['designation'];
                $epfNO = $rows['epfNo'];

            ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $age ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $address ?></td>
                    <td><?php echo $phone ?></td>
                    <td><?php echo $department ?></td>
                    <td><?php echo $designation ?></td>
                    <td><?php echo $epfNO ?></td>
                    
                </tr>
            <?php

            }
            ?>
        </table>


    </div>
</div>
<?php include "../partials/footer.php"; ?>