<?php include "../partials/header.php"; ?>

<div class="content">
    <div class="wrapper">
        <h1>Add new department</h1>
        <br><br>
        <form action="" method="post">
            <table class="tbl-30">
                <tr>
                    <td>Enter Department Name :</td>
                    <td><input type="text" name="department"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" ></td>
                </tr>
            </table>

        </form>
    </div>
</div>
<?php 
if (isset($_POST['submit'])) {
    $department=$_POST['department'];
    $sql="Insert into departmenttbl set department='$department'";
    $res=mysqli_query($conn,$sql);
    $_SESSION['add']='<div>Department add successfully</div>';
    header('location:hrm.php');
} else {

}
?>

<?php include "../partials/footer.php"; ?>