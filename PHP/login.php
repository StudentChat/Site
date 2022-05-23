<?php
	// session_start();

	require_once('../connectDB.php');

	// if(isset($_POST["login"]))
    // {
	    if(!empty($_POST['emailLogin']) && !empty($_POST['passwordLogin'])) {
	    $email=$_POST['emailLogin'];
	    $passwordLogin=$_POST['passwordLogin'];
	    $query =mysqli_query($connection,"SELECT * FROM users WHERE email = '.$email.' AND password = '.$password.'");
	    $numrows= mysqli_num_rows($connection,$query);
        print_r($numrows);
	    if($numrows!=0)
        {
            while($row = mysqli_fetch_assoc($query))
            {
                $dbemail=$row['Email'];
                $dbpasswordLogin=$row['Password'];
            }
            if($email == $dbemail && $passwordLogin == $dbpasswordLogin)
            {
                $_SESSION['session_username']=$email;	
                header("Location:../user/wall.php");
            }
	    } else {
	        // $message = "Invalid username or passwordLogin!";
	        echo  "Invalid username or passwordLogin!";
        }
	    } else {
            $message = "All fields are required!";
	    }
	// }
	?>