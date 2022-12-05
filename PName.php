<?php
    include "conn.php";
    session_start();

    $un = $_SESSION['username'];
    $pw = $_SESSION['password'];

    $sql = "SELECT * FROM imi_account WHERE username='$un' AND password='$pw'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        while($data = mysqli_fetch_array($result)){
            $name = $data['username'];
        }
        mysqli_free_result($result);
        echo $name;
    }
    else{
        echo "ERROR";
    }
    
    $conn->close();
?>