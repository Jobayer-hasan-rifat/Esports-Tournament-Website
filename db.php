<?php
$servername = "sql200.infinityfree.com"; 
$username = "if0_40167439";        
$password = "Letkinslay10";            
$dbname = "if0_40167439_craccloud";  

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
