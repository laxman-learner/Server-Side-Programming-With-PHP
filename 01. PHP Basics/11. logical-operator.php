<?php
$age = 22;
if($age >=18 && $age < 25) /*returns true iff both condition are true
 -> and can also be used instead of && */
{
    echo "You are eligible for voting <br>";
}
if($age >= 20 || $age <30 ){ /* returns true if any of the condition is true
    --> or can also be used instead of ||   */
    echo "You are in young age <br>";
}
if(!($age != 22)) // returns true if condition is false , otherwise false
{
    echo "You are of 22 <br>";
}
if($age >= 20 xor $age <30 ) /* returns false iff both condition are either
false or true , otherwise true */
{
    print "You are very lucky"; // Here both condition are true and hence xor returns false
}
echo "Out of if statements: <br>";

if($age < 20 xor $age <30 ) /*Here first  condition is false and second is true
hence xor operator returns true and statements inside this block get executed */ 
{
 echo "You are handsome guy";
}

?>