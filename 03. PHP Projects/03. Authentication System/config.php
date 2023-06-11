<?php

//host
$host = 'localhost';

//dbname

$dbname = 'auth-system';

// user 
$user = 'root';

//password
$pass = '';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if ($conn == true) {
    echo "It is working fine";
} else {
    echo "Connection is wrong : error";
}
