<?php include "../partials/header.php"; ?>
<div class="content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br><br>

        <form action="/HRmanager/handle-update-emp.php" method="post">
            <table class="tbl-30">
                <?php
                $id = $_GET['id'];
                $sql = "Select*from employee where id ='$id'";
                $res = mysqli_query($conn, $sql);
                $rows = mysqli_fetch_assoc($res);
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
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo $name ?>"></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text" name="age" value="<?php echo $age ?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="<?php echo $email ?>"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" value="<?php echo $address ?>"></td>
                </tr>
                <tr>
                    <td>Phone NO:</td>
                    <td><input type="text" name="phone" value="<?php echo $phone ?>"></td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td>
                        <select name="department">
                            <?php
                            $sql = "Select*from departmenttbl";
                            $res = mysqli_query($conn, $sql);
                            while ($rows = mysqli_fetch_assoc($res)) {
                                $departmentnew = $rows['department'];
                                ?>
                                <option <?php if ($department == $departmentnew) {
                                    echo "selected";
                                } ?> value="<?php echo $departmentnew ?>">
                                    <?php echo $departmentnew ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>designationt:</td>
                    <td>
                        <select name="designation">
                            <?php
                            $sql = "Select*from designationtbl ";
                            $res = mysqli_query($conn, $sql);
                            while ($rows = mysqli_fetch_assoc($res)) {
                                $designationew = $rows['designation'];
                                ?>
                                <option <?php if ($designation == $designationew) {
                                    echo "selected";
                                } ?> value="<?php echo $designationew ?>">
                                    <?php echo $designationew ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>EPF NO:</td>
                    <td><input type="text" name="epfNo" value="<?php echo $epfNO ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" class="btn-secondary"></td>
                    <td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
