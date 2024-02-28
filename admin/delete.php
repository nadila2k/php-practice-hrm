<?php include "conn/conn.php";
$id=$_GET['id'];
$sql="delete from usertbl where id ='$id'";
$res=mysqli_query($conn,$sql);
$_SESSION['Delete']='<div>User delete successfully </div>';
header('location:manage-user.php');

?>
