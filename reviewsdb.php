<?php

$HostName = "localhost";
$DatabaseName = "mmovies";
$HostUser = "root";
$HostPass = "";
$table = "reviews";

$action = isset($_POST["action"]);

$conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
        return;
    }

//if("CREATE_TABLE" == $action){
//        $sql = "CREATE TABLE IF NOT EXISTS $table ( 
//            username VARCHAR(30),
//            stars INT(5) 
//            )";
//        $conn->query($sql) or die($conn->error);
//        $conn->close();
//        return;
//    }
    
//Adding a feedback

if("ADD_REVIEW" == $action){
        // App will be posting these values to this server
        $username = $_POST["username"];
        $stars = $_POST["stars"];
        $sql = "INSERT INTO $table (username, stars) VALUES ('$username', '$stars')";
        $result = $conn->query($sql) or die($conn->error);
        $conn->close();
        return;
    }


?>



