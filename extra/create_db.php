<?php
$servername = "sql308.epizy.com";
$username = "epiz_20692833";
$password = "fFQ74OKjuc";

try {
    $conn = new PDO("mysql:host=$servername;dbname=epiz_20692833_dbtest", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE epiz_20692833_dbtest";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>