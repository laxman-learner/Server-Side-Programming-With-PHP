<?php

echo "1. Some message <br>";
echo "2. Some message <br>";
echo "3. Some message <br>";

// message can also be passed in the die()

die("Here is some error !!!");

die(); // remaining code after this function will not run 
echo "4. Some message <br>";
echo "5. Some message <br>";

// exit() also has same functionality as die() and can be used with message or without message

?>