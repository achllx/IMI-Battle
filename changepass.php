<?php
    session_start();

    include "conn.php";
    $un = $_SESSION['username1'];
    $pw = $_SESSION['password1'];

    

    $sql = "SELECT * FROM imi_account WHERE username ='$un' AND password = '$pw'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $newpw = $_GET['a'];
        $sql1 = "UPDATE imi_account SET password = '$newpw' WHERE username = '$un' AND password = '$pw'";
        if($result1 = $conn->query($sql1)){
            echo "Success";
        }
    }
    else{
        echo "Error";
    }

    $conn->close();
?>