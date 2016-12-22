<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE Books( Book_title VARCHAR(30) NOT NULL,Author VARCHAR(30) NOT NULL,reviews INT(50),Year_of_publication DATE)";

if ($conn->query($sql) === TRUE) {
    echo "Table Books created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
//create table group
$sql = "CREATE TABLE Groups( Group_name VARCHAR(30) NOT NULL,group_members VARCHAR(30) NOT NULL,Group_discussions VARCHAR(200))";

if ($conn->query($sql) === TRUE) {
    echo "Table groups created successfully";
} 
else {
    echo "Error creating table: " . $conn->error;
}
//create table reviews
$sql = "CREATE TABLE Reviews( Reviewer_name VARCHAR(30) NOT NULL,review_comment VARCHAR(200) NOT NULL)";

if ($conn->query($sql) === TRUE) {
    echo "Table Reviews created successfully";
} 
else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>