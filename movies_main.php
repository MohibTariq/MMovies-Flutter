<?php

$HostName = "localhost";
$DatabaseName = "mmovies";
$HostUser = "root";
$HostPass = "";
$table = "movies";

$action = isset($_POST["action"]);

$conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
        return;
    }

//if("CREATE_TABLE" == $action){
        $sql = "CREATE TABLE IF NOT EXISTS $table ( 
            username VARCHAR(20)  PRIMARY KEY,
            feedbackid VARCHAR(30) ,
            favouritemovie_1 TEXT ,
            favouritemovie_2 TEXT,
            favouritemovie_3 TEXT,
            searchedmovie_1 TEXT,
            searchedmovie_2 TEXT,
            searchedmovie_3 TEXT
        
            
            )";
        $conn->query($sql) or die($conn->error);
        $conn->close();
        return;
//    }
    
//Adding a feedback

//if("ADD_FEEDBACK" == $action){
//        // App will be posting these values to this server
//        $username = $_POST["username"];
//        $feedback = $_POST["feedback"];
//        $sql = "INSERT INTO $table (username, feedback) VALUES ('$username', '$feedback')";
//        $result = $conn->query($sql) or die($conn->error);
//        $conn->close();
//        return;
//    }


?>



