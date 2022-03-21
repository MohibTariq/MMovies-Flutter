<?php
 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "read_data";
    $table = "users"; // lets create a table named Employees.
 
    // we will get actions from the app to do operations in the database...
    $action = isset($_POST["action"]);
     
    // Create Connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check Connection
    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
        return;
    }


 
    // If connection is OK...
 
   
 
    // Get all user records from the database(reading all records from the database)
    if("GET_ALL" == $action){
        $db_data = array();
        $sql = "SELECT email,password from $table ORDER BY email DESC";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $db_data[] = $row;
            }
            // Send back the complete records as a json
            echo json_encode($db_data);
        }else{
            echo "error";
        }
        $conn->close();
        return;
    }

 
    // Add an Employee
    
 
     Delete an Employee
    if('DELETE_USER' == $action){
        $emp_id = $_POST['emp_id'];
        $sql = "DELETE FROM $table WHERE id = $emp_id"; // don't need quotes since id is an integer.
        if($conn->query($sql) === TRUE){
            echo "success";
        }else{
            echo "error";
        }
        $conn->close();
        return;
    }
 

?>