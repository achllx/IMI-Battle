<?php
    
    // Hostinger Database
    // $servername = "localhost";
    // $username = "id17543566_ssip2021";
    // $password = "Ssip2021111-";
    // $dbname =  "id17543566_ssip";

    // local Database
    $servername = "localhost";
    $username = "exbaedb";
    $password = "exbaedb210315_";
    $dbname =  "exbaedb";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("ERROR: Could Not Connect. " . $conn->connect_error);
    }
?>