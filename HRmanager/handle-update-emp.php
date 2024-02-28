<?php
include "../admin/conn/conn.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $epfNO = $_POST['epfNo'];

    $sql = "UPDATE employee SET empName='$name', age='$age', email='$email', address='$address', phone='$phone', department='$department', designation='$designation', epfNo='$epfNO' WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $_SESSION['update']='<div>employer updatesuccessfully</div>';
    header('location:hrm.php');
} else {
}
?>