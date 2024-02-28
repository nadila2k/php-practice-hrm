<?php include "../admin/conn/conn.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>CIS</title>
</head>

<body>
    

    <h1 class="header">CIS HRM</h1>
    
    <div class="login">
        <h1 class="text-center">Login</h1>

        <br><br>
        <form action="" method="post" class="text-center">
            User Name:
            <br>
            <input type="text" name="userName">
            <br><br>
            Password:
            <br>
            <input type="text" name="password">
            <br>
            <br>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $sql = "Select*from usertbl where usertbl.userName='$userName' and usertbl.password='$password'";
        $res = mysqli_query($conn, $sql);
        if ($res == true) {
            $rows = mysqli_fetch_assoc($res);
            $userlevel = $rows['userLevel'];
            if ($userlevel == 1) {
                header('location:../admin/manage-user.php');
            } elseif ($userlevel == 2) {
                header('location:../HRmanager/hrm.php');
            } else {
                header('location:../HRA/hram.php');
            }

            $_SESSION['user'] = $userName;
        } else {
        }
    } else {
    }
    ?>
    <?php include "../partials/footer.php"; ?>