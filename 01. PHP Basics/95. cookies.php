
<?php

$cookie_name = "user";
$cookie_value = "Hello developers";

// create cookie having name 'user' with value "Hello developers" that will expire after 1 day and can be accessed from everywhere
setcookie($cookie_name,$cookie_value, time() + (86400),"/" ); 

?>

<html>
    <body>
        <?php

// to retrive cookies
if(!isset($_COOKIE[$cookie_name])){
 echo 'Cookie is not set';
} else
{
    echo  $_COOKIE[$cookie_name];
}

// cookies can also be retrieved in another file and given in newcookie.php

?>
</body>
</html>