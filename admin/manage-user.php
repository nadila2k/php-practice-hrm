<?php include '../partials/header.php'; ?>
<div class="content">
    <div class="wrapper">
        <h1>Admin Menu</h1>
<br><br>
        <a href="add-user.php" class="btn-secondary">Add New User</a>
        
        <br><br>
        <?php 
        if(isset($_SESSION['Password']))
        {
            echo $_SESSION['Password'];
            unset($_SESSION['Password']);
        }
        if(isset($_SESSION['Delete']))
        {
            echo $_SESSION['Delete'];
            unset($_SESSION['Delete']);
        }
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        ?>
            <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>position</th>
                <th>Action</th>
            </tr>
            <?php 
            $sql="Select*from usertbl";
            $res=mysqli_query($conn,$sql);
            while($rows=mysqli_fetch_assoc($res)){
                
                $id=$rows['id'];
                $userName=$rows['userName'];
                $userlevel=$rows['userLevel'];
                if ($userlevel==1) {
                    $userPosition="Admin";
                } else if($userlevel==2) {
                    $userPosition="HR Manager";
                }else{
                    $userPosition="HR Assistant"; 
                }
            
            ?>
            
            <tr>
                <td><?php echo $id?></td>
                <td><?php echo $userName?></td>
                <td><?php echo $userPosition?></td>
                <td>
                    <a href="update.php?id=<?php echo $id?>" class="btn-secondary">Update Password</a> 
                    <a href="delete.php?id=<?php echo $id?>" class="btn-secondary">Delete User</a>   
                </td>
            </tr>
            <?php 
            }
            ?>
            </table>
        
    </div>
</div>
<?php include "../partials/footer.php"; ?>