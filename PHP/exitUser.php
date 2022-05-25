<?php

setcookie('user',$user['Email'],time()+3600*24*30,"/");
header('Location: ../index.php');

?>