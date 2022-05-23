<?php
	require_once('../connectDB.php');

	// if(isset($_POST["confirmRegistration"])){
	
        if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) 
        {
            $email=($_POST['email']);
            $username=($_POST['username']);
            $password=($_POST['password']);
            $query=mysqli_query($connection,"SELECT * FROM users WHERE Username ='".$username."'");
            $numrows=mysqli_num_rows($query);

            if($numrows==0)
            {
                $sql="INSERT INTO users
                (Email,Password, Username)
                VALUES('$email','$password', '$username')";
                $result=mysqli_query($connection, $sql);
                if($result){
                $message = "Account Successfully Created";
                } else {
                $message = "Failed to insert data information!";
                }
            } else {
                $message = "That username already exists! Please try another one!";
            }
        } else {
            $message = "All fields are required!";
        }
	// }
    if (!empty($message)) 
    {
        echo "<p class='error'>" . "MESSAGE: ". $message . "</p>";
    }
	?>





<!-- <?php
$email = $_POST['email'];
$nickname = $_POST['nickname'];
$pass = $_POST['pass'];
require_once('../connectDB.php');

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $countEmail = mysqli_query($connection,"SELECT id FROM users WHERE Email = '$email'");
        $row = mysqli_num_rows($countEmail);
        
        if($countEmail>0)
        {
            echo '<script>alert(\"данный E-mail уже зарегистрирован\");</script>';
            header('Location:../index.php');
        }
        else{
            mysqli_query($connection,"INSERT INTO `users`(`Email`, `Password`, `Username`) VALUES ('$email','$pass','$nickname')");
            header('Location:../index.php');
        }
    } else {
    echo "<script>alert(\"Введен некорректный E-mail\");</script>";
    header('Location:../index.php');
    }
?> -->
