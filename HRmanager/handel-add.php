<?php 
include "../partials/header.php";


if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $department=$_POST['department'];
    $designation=$_POST['designation'];
    $epfNO=$_POST['epf'];

    $sql = "INSERT INTO employee SET empName='$name', age='$age', email='$email', address='$address', phone='$phone', department='$department', designation='$designation', epfNo='$epfNO'";

    $res=mysqli_query($conn,$sql);
    $_SESSION['add']='<div>employer add successfully</div>';
    header('location:hrm.php');
} else {

}


?>