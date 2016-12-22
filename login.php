<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

$username = $_POST['username'];
$password = $_POST['password'];


echo("The username is ".$username.'<br>Password is '.$password);

$res = $conn->query("SELECT * FROM user where username = $username AND password = $password ");

if($res->num_rows > 0){
$row = $res->fetch_assoc();
echo($row[0]);
}else{
echo("Nothing found");

}





/*if(!empty($res)){

echo('Login successful!');
}else{
echo('Login failed');

}*/

?>