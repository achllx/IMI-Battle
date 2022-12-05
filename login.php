<?php
    session_start();

    include "conn.php";

    $un=$_GET['un'];
    $pw=$_GET['pw'];
    
    $_SESSION['username'] = $un;
    $_SESSION['password'] = $pw;

    $sql = "SELECT username, password FROM imi_account WHERE username='$un' AND password='$pw'";
    $result = $conn->query($sql);
    if($result->num_rows > 0 ){
        echo "1";
    }
    else{
        echo "Username and Password do not match.";
    }
    $conn->close();
?>