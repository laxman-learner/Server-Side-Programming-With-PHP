<?php

// in_array() and array_search() functions in php : used for searching purpose

// in_array() returns either 1 or 0 depending upon search becomes suceessful or not
$fruits = ["banana", 55 , "apple", "papaya"];
echo in_array('apple',$fruits);
if(in_array('apple',$fruits)){
    echo "<br>Found Succefully";
}
else{
    echo "<br>Not found";
}
echo "<br>".in_array('55',$fruits); 
/*  although datatype does not match this statements prints 1
to check the datatype third parameter that indicates the strict mode is
 used inside the in_array() which is false 
by default if true check the datatype and 
 */
if(in_array('55',$fruits,true)){
    echo "<br>Found Succefully";
}
else{
    echo "<br>Not found";
}
// multidimensional array
 $sample = array(
  array(45,56,45),
  array('legend','familiar','silent'),
   array(60.3,67,84)
 );
 // checking the elements:
 if(in_array(array(45,56,45),$sample,true)){
    echo "<br>Found Succefully";
}
else{
    echo "<br>Not found";
}
//checking the next elements
if(in_array(array('legend','familiar','silent'),$sample,true)){
    echo "<br>Found Succefully";
}
else{
    echo "<br>Not found";
}
if(in_array(array('legend','family','silent'),$sample,true)){
    echo "<br>Found Succefully";
}
else{
    echo "<br>Not found";
}

// array_search function returns indexed number for indexed array and key for the associative array
$fruit = ["banana", 55 , "apple", "papaya"];
echo "<br>".array_search('apple', $fruit);
$arr = [
   "name" => "Elon",
   'id'  => "CS_205",
   'SSN' =>  502
];
echo "<br>".array_search('CS_205', $arr);
?>