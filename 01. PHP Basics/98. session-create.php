<?php

session_start();

$_SESSION["favcolor"] = 'green'; // we can also change the session name
echo 'Session variable is set';

// this session is displayed in session-view.php and destroyed in session-destry.php

?>

 