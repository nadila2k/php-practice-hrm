<?php include '../partials/header.php'; ?>
<div class="content">
    <div class="wrapper">
        <h1>Add User</h1>
        <br>
        <br>
        <form action="" method="post">
            <table class="tbl-30">
                <tr>
                    <td>User Name:</td>
                    <td><input type="text" name="userName"></td>
                </tr>
                <tr>
                    <td>Select position :</td>
                    <td>
                        <input type="radio" name="position" value="2">HR
                        <input type="radio" name="position" value="3">HR Assistant
                    </td>
                </tr>
                <tr>
                    <td>password:</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" class="btn-secondary"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php 
if (isset($_POST['submit'])) {
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    $userlevel=$_POST['position'];

    $sql="INSERT INTO usertbl set userName='$userName',password='$password',userLevel='$userlevel'";
    $res=mysqli_query($conn,$sql);
    $_SESSION['add']="<div>User add successfully</div>";
    header('location:manage-user.php');

} else {
    $_SESSION['add']="<div>User not added</div>";
}
?>
<?php include '../partials/footer.php' ?>