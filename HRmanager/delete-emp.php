<?php include "../admin/conn/conn.php";
$id=$_GET['id'];
$sql="Delete from  employee Where id='$id' ";
$res=mysqli_query($conn,$sql);
$_SESSION['delete']='<div>employer delete successfully</div>';
header('location:hrm.php');

?>
