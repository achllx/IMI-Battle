<?php
    include "conn.php";
    session_start();

    //player
    $un = $_SESSION['username'];
    $pw = $_SESSION['password'];
    //enemy
    $id = $_SESSION['id'];

    $dmg=$_GET['a'];
    $dmg1=$_GET['a1'];

    $health=$_GET['b'];
    $health1=$_GET['b1'];

    $mp=$_GET['c'];
    $mp1=$_GET['c1'];

    $sql = "UPDATE imi_account SET hp='$health', mp='$mp' WHERE username='$un' AND password='$pw'";

    if($result = $conn->query($sql)){

        $sql1="UPDATE imi_enemy SET hp='$health1', mp='$mp1' WHERE id='$id'";

        if($result1 = $conn->query($sql1)){
            echo "You deal ".$dmg." skill damage \n";
            echo "You recive ".$dmg1." normal damage";
        }else{
            echo "Error1";
        }
    }else{
        echo "Error";
    }

    $conn->close();
?>