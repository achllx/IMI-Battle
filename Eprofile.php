<?php
    include "conn.php";
    session_start();
    $id = $_SESSION['id'];

    $sql1 = "SELECT picture FROM imi_enemy WHERE id = '$id'";
    $result1 = $conn->query($sql1);
    if($result1->num_rows > 0){
        while($data = mysqli_fetch_array($result1)){
            $profile = $data['picture'];
        }
        mysqli_free_result($result1);
    }
    echo "<img src='enemy/" . $profile . "' width='100' height='100'>";
    $conn->close();
?>