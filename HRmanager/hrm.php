<?php include "../partials/header.php"; ?>
<div class="box-1">
    <form action="search.php" method="post">
        <input type="text" name="serch" class="food-search" >
        <input type="submit" name="submit" value="Search" class="btn-secondary">
    </form>
</div>
<div class="content">
    <div class="wrapper">
        <h1>Hr Menu</h1>
        <br>
        <div class="box-2">
            <ul>
                <li><a href="add-emp.php" class="btn-secondary">Add New User</a></li>
                <li><a href="department-emp.php" class="btn-secondary">Add New Department</a></li>
                <li><a href="designation-emp.php" class="btn-secondary">Add New Designation</a></li>
            </ul>
        </div>
        <br>
        <?php  
        if(isset($_SESSION['update']))
        {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
        if(isset($_SESSION['delete']))
        {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        if(isset($_SESSION['search']))
        {
            echo $_SESSION['search'];
            unset($_SESSION['search']);
        }
        ?>
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
                    <td>
                        <a href="update-emp.php?id=<?php echo $id ?>" class="btn-primary">Update</a>
                    </td>
                    <td>
                        <a href="delete-emp.php?id=<?php echo $id ?>" class="btn-secondary">Delete</a>
                    </td>
                </tr>
            <?php

            }
            ?>
        </table>


    </div>
</div>
<?php include "../partials/footer.php"; ?>