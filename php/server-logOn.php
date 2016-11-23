 <?php 
    $servername = "localhost";
    $username = "trycatch_admin";
    $password = "ilikepie123";
    $dbname = "trycatch_hs";

    // Connect to the Database
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check for a connection, and notify if one isn't found
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>
