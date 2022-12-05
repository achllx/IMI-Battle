<?php
    session_start();

    $un = $_SESSION['username'];
    $pw = $_SESSION['password'];

    include "conn.php";

    isset($_FILES['file']['name']);

    $filename = $_FILES['file']['name'];
    $filesize = $_FILES['file']['size'];
    $filetype = $_FILES['file']['type'];
    $filetmp = $_FILES['file']['tmp_name'];

    $path = "upload/" . $filename;

    if($filetype == "image/jpeg" || $filetype == "image/png"){
        if($filesize <= 1000000){
            if(move_uploaded_file($filetmp, $path)){
                // rewrite data base
                $sql = "SELECT * FROM imi_account WHERE username='$un' AND password='$pw'";
                $write = $conn->query($sql);
                if($write->num_rows > 0){
                    while($data = mysqli_fetch_array($write)){
                        $email = $data['email'];
                        $username = $data['username'];
                        $password = $data['password'];
                        $hp = $data['hp'];
                        $mp = $data['mp'];
                        $atk = $data['atk'];
                        $def = $data['def'];
                        $gold = $data['gold'];
                    }
                    mysqli_free_result($write);
                    //delete the account
                    $sql0 = "DELETE FROM imi_account WHERE username = '$un' AND password = '$pw'";
                    $write0 = $conn->query($sql0);
                    //rewrite account
                    $sql1 = "INSERT INTO imi_account (email,profile_picture,username,password,hp,mp,atk,def,gold)
                                VALUES('$email','$filename','$username','$password','$hp','$mp','$atk','$def','$gold')";
                    $write1 = $conn->query($sql1);
                    echo "<img src='upload/" . $filename . "' width='100' height='100'>";
                }else{
                    echo "error";
                }
            }else{
                echo "path not found";
            }
        }else{
            echo "File size is to large";
        }
    }else{
        echo "unknown type";
    }

    $conn->close();
?>