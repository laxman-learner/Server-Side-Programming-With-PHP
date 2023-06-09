<?php

//host
$host = 'localhost';

//dbname

$dbname = 'Auth-system';

// user 
$user = 'root';

//password
$pass = '';

$conn = new PDO("mysql:host = $host; dbname = $dbname;", $user, $pass);

/* if ($conn == true) {
    echo "It is working fine";
} else {
    echo "Connection is wrong : error";
} */
