<?php

    session_start();
    include "conn.php";

    $id = 1;
    $_SESSION['id'] = $id;

    $sql = "SELECT * FROM imi_enemy WHERE id = $id";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($data = mysqli_fetch_array($result)){
            $name = $data['name'];
            $hp = $data['hp'];
            $mp = $data['mp'];
            $atk = $data['atk'];
            $def = $data['def'];
            $drop = $data['gdrop'];
        }
        mysqli_free_result($result);
    }
    else{
        echo "ERROR";
    }
    echo "
    <div>HP:</div>
    <div id='Ehp'>".$hp."</div>
    <div>MP:</div>
    <div id='Emp'>".$mp."</div>
    <div>Atk:</div>
    <div id='Eatk'>".$atk."</div>
    <div>Def:</div>
    <div id='Edef'>".$def."</div>
    <div>Gold Drop:</div>
    <div id='Edrop'>".$drop."</div>";

    $conn->close();
?>