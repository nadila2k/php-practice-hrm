<?php include "../partials/header.php"; ?>
<div class="content">
    <div class="wrapper">
        <h1>Add new department</h1>
        <br><br>
        <form action="" method="post">
            <table class="tbl-30">
                <tr>
                    <td>Enter new Designation:</td>
                    <td><input type="text" name="designation"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" class="btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php 
if (isset($_POST['submit'])) {
    $designation=$_POST['designation'];
    $sql="Insert into designationtbl set designation='$designation'";
    $res=mysqli_query($conn,$sql);
    $_SESSION['add']='<div>Designation add successfully</div>';
    header('location:hrm.php');
} else {
    
}
?>
<?php include "../partials/footer.php"; ?>