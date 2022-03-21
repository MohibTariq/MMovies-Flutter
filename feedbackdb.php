<?php

$HostName = "localhost";
$DatabaseName = "mmovies";
$HostUser = "root";
$HostPass = "";
$table = "feedback";

$action = isset($_POST["action"]);

$conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
        return;
    }

//if("CREATE_TABLE" == $action){
//        $sql = "CREATE TABLE IF NOT EXISTS $table ( 
//            feedbackid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//            username VARCHAR(30) NOT NULL UNIQUE,
//            feedback VARCHAR(30) NOT NULL
//            )";
//        $conn->query($sql) or die($conn->error);
//        $conn->close();
//        return;
//    }
    
//Adding a feedback

if("ADD_FEEDBACK" == $action){
        // App will be posting these values to this server
        $username = $_POST["username"];
        $feedback = $_POST["feedback"];
        $sql = "INSERT INTO $table (username, feedback) VALUES ('$username', '$feedback')";
        $result = $conn->query($sql) or die($conn->error);
        $conn->close();
        return;
    }


?>



