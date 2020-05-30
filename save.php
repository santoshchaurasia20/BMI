<?php


    $conn = new mysqli('localhost', 'root', '', 'test');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = $_POST["name"];
$gender = $_POST["gender"];
$height = $_POST["height"];
$weight = $_POST["weight"];

$sql = "INSERT INTO bmi_data  (name, gender, height,weight)
VALUES ('$name', '$gender','$height', '$weight')";

if ($conn->query($sql) === TRUE) {
    
    $msg="Data Added Successfully";
    echo json_encode(['code'=>200, 'msg'=>$msg]);
    exit;
    
   // header("Location: https://www.fbmdigital.in/doctor_enrolment/thankyou.html"); 
   // exit();
       
} else {
    $msg= "Error: " . $sql . "<br>" . $conn->error;
    echo json_encode(['code'=>200, 'msg'=>$msg]);
    exit;
}

    $conn->close();


?>