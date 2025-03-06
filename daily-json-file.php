<?php
$conn = mysqli_connect("localhost","root","","test") or die("connection failed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn,$sql) or die("sql query failed");

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);  //all the data is convert in the output variable from the database in the associative array

$json_data = json_encode($output, JSON_PRETTY_PRINT);// associative array is convert into a json formate

$file_name = "my-" . date("d-m-Y") . ".json"; // to create file to store json data

if(file_put_contents("json/{$file_name}",$json_data)){  //$json_data is saved into a json file  
    echo $file_name . "File Created";
}else{
    echo "Cant Insert data in JSON file";
}
// echo "<pre>";
// print_r($output);
// echo "</pre>";
?>