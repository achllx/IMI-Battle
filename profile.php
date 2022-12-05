<?php
    include "conn.php";
    session_start();
    $un = $_SESSION['username'];
    $pw = $_SESSION['password'];

    $sql1 = "SELECT profile_picture FROM imi_account WHERE username='$un' AND password='$pw'";
    $result1 = $conn->query($sql1);
    if($result1->num_rows > 0){
        while($data = mysqli_fetch_array($result1)){
            $profile = $data['profile_picture'];
        }
        mysqli_free_result($result1);
    }
    echo "<img src='upload/" . $profile . "' width='100' height='100'>";
    $conn->close();
?>