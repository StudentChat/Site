<?php
use FTP\Connection;
$email = filter_var(trim($_POST['emailLog']),FILTER_UNSAFE_RAW);
$password = filter_var(trim($_POST['passwordLog']),FILTER_UNSAFE_RAW);

$passwordHash = md5($password.'qwerty12345');

require_once('../connectDB.php');

$result = mysqli_query($connection,"SELECT * FROM `users` WHERE `Email` = '$email' AND `password` = '$passwordHash'");

$rows = mysqli_num_rows($result);

$user = mysqli_fetch_array($result);

if($rows==0){
    echo('Такой пользователь не найден!!!, пожалуйста зарегистрируйтесь!');
    $connection->close();
    exit();
    
}
if($rows==1){
    setcookie($user['Email'],$user['Email'],time()+3600*24*30,"/");
    $connection->close();
    header('Location: ../user/wall.php');
}
?>