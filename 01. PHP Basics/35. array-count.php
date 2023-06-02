<?php
// count() and sizeof() function for array in php : these function performs the same functionality
$food = array('orange', 'banana','apple','mango'); // one dimensional array
echo count($food)."<br>";
echo sizeof($food);
echo "<br>";
// for displaying array elements:
    $len = count($food);
    for($i = 0; $i<$len; $i++){
        echo $food[$i]."<br>";
    }

    // multidimensional array
    $foods = array(
        'fruits' => array('orange','banana','apple'),
        'vegetable' => array('carrot','colard','pea')
    );
    echo count($foods); // output : 2 --> this gives no of internal array in multidimensional array
    echo "<br>".count($foods , 1); // output : 8
     /* here 1 is the mod value which is 0 by default
 this returns the total number of elements including all elements of internal array */

 // To print the number of elements in any single internal array 
   echo "<br>".count($foods['fruits']); 
   
   /* // echo array_count_values() returns array with frequency of repitition of elements which can 
     be displayed using print_r() */
 
     $fruits = array('orange', 'banana','apple','mango','orange');
 echo "<pre>";
     echo "<br>". print_r(array_count_values($fruits)); 
     echo "</pre>";
?>  