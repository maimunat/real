<?php
$servername = "localhost";
$username = "book";
$password = "munatsy";
$dbname = "book club";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO books (book title, author, reviews,year of publication)
VALUES ('pink panther', 'john doe', '5',`12/21/2019`)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
