<?php
// goto statement is used to jump the execution of program to the particular portion
echo "Hello <br>";
for($a = 1; $a <=10; $a++ ){
    if($a == 5)
    {
        goto abc; //label call
    }
    echo "Number : ".$a."<br>";
}
abc:    // label
echo "Jump to the other part";
?>