<?php
    include "conn.php";
    
    $un=$_GET['un'];
    $pw=$_GET['pw']; 
    $email=$_GET['email'];
    $hp = 1000;
    $mp = 100;
    $atk = 10;
    $def = 5;
    $gold = 0;

    if($email == "" || $email == null){
        echo "Email Cannot be Empty";
    }
    elseif((strlen($un)>=4 && strlen($un)<=12) && (strlen($pw)>=8 && strlen($pw)<=20)){
        // make query
        $email_check = "SELECT email FROM IMI_account WHERE email='$email'";
        $username_check = "SELECT username FROM imi_account WHERE username='$un'";
        // inserting query
        $result = $conn->query($email_check);
        $result1 = $conn->query($username_check);
        $sql = "INSERT INTO imi_account (email, username, password, hp, mp, atk, def, gold) 
                VALUES ('$email', '$un', '$pw', '$hp', '$mp', '$atk', '$def', '$gold')";
        // checking
        if($result->num_rows > 0){
            echo 'Email Already Exist';
            echo "<br>";
        }
        elseif($result1->num_rows > 0){
            echo 'Username Alreasy Exist';
        }
        else{
            mysqli_query($conn,$sql);
            echo "1";
        }
        $conn->close();
    }
    elseif((strlen($un)<4 || strlen($un)>12) && (strlen($pw)>=8 && strlen($pw)<=20)){
        echo "Username must be 4 letters and maximum 12 letters";
    }
    elseif((strlen($pw)<4 || strlen($pw)>20) && (strlen($un)>=4 && strlen($un)<=12)){
        echo "Password must contain 8 char and maximum 20 char";
    }
    else{
        echo "error";
    }
?>