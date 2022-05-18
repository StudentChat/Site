<?php
$email = $_POST['email'];
$nickname = $_POST['nickname'];
$pass = $_POST['pass'];
require_once('../connectDB.php');

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $countEmail = mysqli_query($connection,"SELECT id FROM users WHERE Email = '$email'");
        $row = mysqli_num_rows($countEmail);
        
        if($row>0)
        {header('Location:../index.php');
            echo "<script>alert(\"данный E-mail уже зарегистрирован\");</script>";
        }
        else{
            mysqli_query($connection,"INSERT INTO `users`(`Email`, `Password`, `Username`) VALUES ('$email','$pass','$nickname')");
            header('Location:../index.php');
        }
    } else {
    echo "<script>alert(\"Введен некорректный E-mail\");</script>";
    header('Location:../index.php');
    }



?>
