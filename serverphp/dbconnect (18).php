<?php
$servername = "localhost";
$username = "crimsonw_271738_myshopadmin1";
$password = "p88G0mMnpArV";
$dbname = "crimsonw_271738_myshopdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
?>