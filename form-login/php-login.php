<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "Aghna" && $password == "XIRPL2"){
        header("location: berhasillogin.php");
     } 
    else { 
        header("location: form-login.php");
    } 
?>