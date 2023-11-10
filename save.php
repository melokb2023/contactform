<?php

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$category = $_POST["category"];
$message = $_POST["message"];

if(empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["email"]) || empty($_POST["category"]) || empty($_POST["message"]))  
      {  
           echo '<script>alert("All Fields are required")</script>';  
      }
else{

$conn = mysqli_connect("localhost", "root", "", "contactform") or die("connection failed");
$sql = "INSERT INTO contactlist(firstname, lastname, email, category, message) VALUES ('{$firstname}','{$lastname}','{$email}','{$category}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/contactform/contactform/contactform.php");
mysqli_close($conn);

}
?>