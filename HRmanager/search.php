<?php include "../partials/header.php"; ?>
<div class="content">
    <div class="wrapper">
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
            $search=$_POST['serch'];
            $sql = "SELECT * FROM employee
            WHERE empName LIKE '%$search%'
               OR age LIKE '%$search%'
               OR email LIKE '%$search%'
               OR address LIKE '%$search%'
               OR phone LIKE '%$search%'
               OR department LIKE '%$search%'
               OR designation LIKE '%$search%'
               OR epfNo LIKE '%$search%';
            ";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if ($count >0) {
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
               
            } else {
             $_SESSION['search']='<div> Search nullq</div>';
             header('location:hrm.php');
            }
            
            ?>
           
            </table>
    </div>
</div>
<?php include "../partials/footer.php"; ?>