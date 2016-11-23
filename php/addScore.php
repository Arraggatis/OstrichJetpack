<?php 

$servername = "localhost"; 
$username = "trycatch_admin"; 
$password = "ilikepie123"; 
$dbname = "trycatch_hs"; 
 
// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
}  

$name = $_POST["initials"]; 
$currentScore = $_POST["final-score"]; 
$gametype = $_POST["gametype"];

if ($gametype == "spelling") {
	$sql = "INSERT INTO sp_hs (sp_name, sp_score) VALUES ('$name', '$currentScore')"; 
} elseif ($gametype == "math") {
	$sql = "INSERT INTO math_hs (math_name, math_score) VALUES ('$name', '$currentScore')"; 
}

if ($conn->query($sql) === TRUE) { 
    echo "Score Submitted. "; 
} else { 
    echo "Error: " . $sql . "<br>" . $conn->error; 
} 

$conn->close(); 
header('Location: http://trycatchbeta.com/'); 
?>
