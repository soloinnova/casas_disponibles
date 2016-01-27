<?php
require('config.php');


if( isset($_POST['casaNo']) )
{
    $casaNo = $_POST['casaNo'];
    $estado = $_POST['estado'];

   // echo $casaNo.' ';
   // echo $estado;


// Create connection
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE casa SET estado ='".$estado."' WHERE id =".$casaNo;
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo "ok";
    } else {
        echo "Error updating record: " . $conn->error;
    }
//close conecction
    $conn->close();

}

?>