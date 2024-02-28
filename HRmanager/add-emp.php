<?php include "../partials/header.php"; ?>
<div class="content">
    <div class="wrapper">
        <h1>Add new Employee</h1>
        <br>
        <br>
        <form action="/HRmanager/handel-add.php" method="post">
            <table class="tbl-30">
                <tr>
                    <td>Name :</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Age :</td>
                    <td><input type="text" name="age"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Phone No:</td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td> Department:</td>
                    <td>
                        <select name="department">
                            <?php
                            $sql = "Select*from departmenttbl";
                            $res = mysqli_query($conn, $sql);
                            while ($rows = mysqli_fetch_assoc($res)) {
                                $department = $rows['department'];
                            ?>
                                <option value="<?php echo $department?>"><?php echo $department ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Designation:</td>
                    <td>
                        <select name="designation">
                            <?php
                            $sql = "Select*from designationtbl";
                            $res = mysqli_query($conn, $sql);
                            while ($rows = mysqli_fetch_assoc($res)) {
                                $designation = $rows['designation'];
                            ?>
                                <option value="<?php echo $designation?>"><?php echo $designation?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>EPF No:</td>
                    <td><input type="text" name="epf"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" class="btn-primary"></td>
                </tr>                
            </table>
        </form>
    </div>
</div>

<?php include "../partials/footer.php"; ?>