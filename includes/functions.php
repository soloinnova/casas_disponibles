<?php
require('config.php');

function comprobarDisponibilidad($numeroDecasa)
{

// Create connection
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM casa   WHERE id =".$numeroDecasa;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if($row["estado"] == 'disponible'){echo '#4BD609';}
            elseif($row["estado"] == 'ocupado'){echo '#FF0000';}
        }
    } else {
        echo "0 results";
    }
//close conecction
    $conn->close();
}

function displayEstadoAtribute($numeroDecasa){
// Create connection
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM casa   WHERE numero_casa =".$numeroDecasa;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["estado"];
        }
    } else {
        echo "0 results";
    }
//close conecction
    $conn->close();
}


function displayProyectoAtribute($numeroDecasa){
// Create connection
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM casa   WHERE numero_casa =".$numeroDecasa;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["proyecto"];
        }
    } else {
        echo "0 results";
    }
//close conecction
    $conn->close();
}


?>