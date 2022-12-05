<?php
    include "conn.php";
    session_start();

    $id = $_SESSION['id'];

    $sql = "SELECT * FROM imi_enemy WHERE id = '$id'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        while($data = mysqli_fetch_array($result)){
            $name = $data['name'];
        }
        mysqli_free_result($result);
        echo $name;
    }
    else{
        echo "ERROR";
    }
    
    $conn->close();
?>