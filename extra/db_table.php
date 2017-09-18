<?php
$servername = "sql308.epizy.com";
$username = "epiz_20692833";
$password = "fFQ74OKjuc";
$dbname = "epiz_20692833_database";





$name=$_POST['InputName'];
$email=$_POST['InputEmail'];
$msg=$_POST['InputMessage'];

echo $name;
echo "\n";
echo $email;
echo "\n";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to enterdata into table
$sql = "INSERT INTO contactform (Name, Email, Message)
VALUES ('$name', '$email', '$msg')";

if ($conn->query($sql) === TRUE) {
    echo "Data entered in created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>