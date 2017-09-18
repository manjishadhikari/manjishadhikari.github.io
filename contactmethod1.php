
<?php
$servername = "sql308.epizy.com";
$username = "epiz_20692833";
$password = "fFQ74OKjuc";
$dbname = "epiz_20692833_database";





$name=$_POST["InputName"];
$email=$_POST["InputEmail"];
$msg=$_POST["InputMessage"];

/*
echo $name;
echo "\n";
echo $email;
echo "\n";
*/

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
   /* echo"\n\r";
	echo "Information has been saved to our database. ";*/
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();


?>

<html>
<head>
  <link href="css/general.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
  <body>
<div class="intro-header">
<h1>Thank you for filling the form: <?php echo $_POST["InputName"]; ?><br>
We will get back to you shortly on your email:  <?php echo $_POST["InputEmail"]; ?> </h1>
<br>
<h1>Redirecting back....</h1>
   <h3><a href="index.html" font color="orange">If it doesn't redirect back to homepage automatically click here </a></h3>
</div>

<script>
    setTimeout(function(){
       window.location.href = 'index.html';
    }, 20000);
</script>
</body>
</html>