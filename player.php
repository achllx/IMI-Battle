<?php

    session_start();

    include "conn.php";

    $un = $_SESSION['username'];
    $pw = $_SESSION['password'];
    $_SESSION['username1'] = $un;
    $_SESSION['password1'] = $pw;

    $sql = "SELECT * FROM imi_account WHERE username = '$un' AND password  = '$pw'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($data = mysqli_fetch_array($result)){
            $name = $data['username'];
            $hp = $data['hp'];
            $mp = $data['mp'];
            $atk = $data['atk'];
            $def = $data['def'];
            $gold = $data['gold'];
        }
        mysqli_free_result($result);
    }
    else{
        echo 'ERROR';
    }
    echo "
    <div>HP:</div>
    <div id='Php'>".$hp."</div>
    <div>MP:</div>
    <div id='Pmp'>".$mp."</div>
    <div>Atk:</div>
    <div id='Patk'>".$atk."</div>
    <div>Def:</div>
    <div id='Pdef'>".$def."</div>
    <div>Gold:</div>
    <div id='Pgold'>".$gold."</div>";

    $conn->close();
?>