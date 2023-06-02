<?php
// continue statement: used to skip the statement when condition is satisfied
for($a = 1; $a <= 10; $a++)
{
    if($a == 5){
        echo "after this continue <br>";
        continue;
    }
    echo $a."<br>";
}
/*break statement is used with switch statement and with loop in
 order to terminate the further execution */
for($a = 1; $a <= 10; $a++)
{
    if($a == 5){
        echo "after this break <br>";
        break;
    }
    echo $a."<br>";
}

?>