<?php

echo  $_COOKIE['user'];

 /* to delete cookies

setcookie('user',"", time() - (86400),"/" );  // it produces error in second refresh
 */
?>