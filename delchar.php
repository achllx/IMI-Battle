<?php
    session_start();
    include "conn.php";
    $un = $_SESSION['username'];
    $pw = $_SESSION['password'];

    $type = $_GET['a'];

    $sql = "DELETE FROM imi_account WHERE username = '$un' AND password = '$pw'";
    
    if($type == "CONFIRM"){
        if($result = $conn->query($sql)){
            echo "Success";
        }
    }
    else{
        echo "!! You must type CONFIRM to DELETE ACCOUNT!!";
    }
    
    $conn->close();
?>