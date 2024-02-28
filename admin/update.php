<?php include "../partials/header.php"; ?>
<div class="content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br><br>
        <?php
         $id=$_GET['id'];
        $sql="Select*from usertbl where id='$id'";
        $res=mysqli_query($conn,$sql);
        $rows=mysqli_fetch_assoc($res);
        $userName=$rows['userName'];
        $password=$rows['password'];
        ?>
        <form action="" method="post">
            <table class="tbl-30">
            <tr>
                <td>User Name :</td>
                <td><input type="text" name="userName" value="<?php echo $userName?>"></td>
            </tr>

            <tr>
                <td>Current Password :</td>
                <td><input type="text" name="Currentpassword" ></td>
            </tr>
            
            <tr>
                <td>New Password :</td>
                <td><input type="text" name="newPassword" ></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" class="btn-secondary"></td> 
                <td><input type="hidden" name="password" value="<?php echo $password?>"></td>
                <td><input type="hidden" name="id" value="<?php echo $id?>"></td>
                 
            </tr>
            </table>
        </form>

    </div>
</div>
<?php 
if (isset($_POST['submit'])) {
    $id=$_POST['id'];
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    $newPassword=$_POST['newPassword'];
    $Currentpassword=$_POST['Currentpassword'];
    if ($Currentpassword==null) {
        $sql = "UPDATE usertbl SET userName = '$userName', password = '$password' WHERE id = '$id'";
        $res=mysqli_query($conn,$sql);
        
        $_SESSION['Password']='<div>user manage successful </div>';
        header('location:manage-user.php');
    } else {
        if ($Currentpassword==$password) {
            
            $sql = "UPDATE usertbl SET userName = '$userName', password = '$newPassword' WHERE id = '$id'";
            $res=mysqli_query($conn,$sql);
            $_SESSION['Password']='<div>user manage successful </div>';
            header('location:manage-user.php');
        } else {
            echo "Password does not match";
        }
    }
   
    


} else {

}
?>
<?php include "../partials/footer.php"; ?>