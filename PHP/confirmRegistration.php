<?php
use FTP\Connection;
	$email = filter_var(trim($_POST['emailReg']),FILTER_UNSAFE_RAW);
    $password = filter_var(trim($_POST['passwordReg']),FILTER_UNSAFE_RAW);
    $username = filter_var(trim($_POST['usernameReg']),FILTER_UNSAFE_RAW);

    if(mb_strlen($email)<6 ||mb_strlen($email)>90){
        echo('Недопустимая длина логина');
        exit();
    }else if(mb_strlen($password)<8 ||mb_strlen($password)>50){
        echo('Недопустимая длина пароля (от 8 символов и до 50 символов)');
        exit();
    }

    $passwordHash = md5($password.'qwerty12345');

    require('../connectDB.php');

    $connection->query("INSERT INTO `users`(`E-mail`, `Password`, `Username`) VALUES ('$email','$passwordHash','$username')");
    $connection->close();
    header('Location: /');