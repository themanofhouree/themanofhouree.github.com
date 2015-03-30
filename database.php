<?php
//Connect to the database
$mysqli = NEW MySQLi('localhost', 'root', 'root', 'test');

//Query the database
$resultSet = $mysqli->query("SELECT * FROM test");

//Count the returned rows
if ($resultSet->num_rows !=0 ){
    
//Turn the results into an array
    while ($rows = $resultSet->fetch_assoc())
    {
        $fname = $rows['fname'];
        $lname = $rows['lname'];
        $age = $rows['age'];
        $id = $rows['id'];
        
        echo "<p>Name: $fname $lname <br/>Age: $age <br/> Id: $id</p>";
    }
    
//Display the results
}else{
    echo "error";
}
?>