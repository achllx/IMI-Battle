<?php

    include "conn.php";

    $email=$_GET['email'];
    if($email != "" || $email != null){
        $sql = "SELECT * FROM imi_account WHERE email='$email'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $data = mysqli_fetch_array($result);
            $password = $data['password'];
            echo $password;
        }
    }
    else{
        echo "ERROR: Email NOt FOunD";
    }

    $conn->close();

?>