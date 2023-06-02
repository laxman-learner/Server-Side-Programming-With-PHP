<?php

/* array_splice(array,start,length,array-II) is used for:
    -> deleting the elements of the array
    ->  replacing the elements of existing array with element of another array and
    ->  inserting elements between any two elements
    This function does not create a separate array but modifies the existing array */
    // deleting the array elements:
    $colors = ['red', 'green', 'cyan','blue','violet','yellow'];
    array_splice($colors,1); // this will delete all the elements from index 1 to last 
    echo "<pre>";
    print_r($colors);
    echo "</pre>";
    
    /* similarly,,
     array_splice($colors,1,3); // will delete the element green , cyan and blue
     array_splice($colors,1,-1); // will delete the green, cyan , blue , and violet
      array_splice($colors,1,-2); // will delete green, cyan and blue
     array_splice($colors,0,1);  // will delete first element
     array_splice($colors,4,-1); // will delete violet
    array_splice($colors,-2);  // will delete violet and yellow
    array_splice($colors,-1);  // will delete last element
    */
  // replacing array elements with new one
  $color = ['red', 'green', 'cyan','blue','violet','yellow'];
   $fruits = ["apple",'mango','orange'];
  array_splice($color,1,3,$fruits); 
  
  /* will replace the three elements of color array from index 1 
  to 3 i.e. three elements with the elements of fruit array  */
  echo "<pre>";
    print_r($color);
    echo "</pre>";   
    /*
 //array_splice($color,-1,3,$fruits);  will replace last element with apple and add the remaining two element of 
 fruits array to color array
  //array_splice($color,-3,3,$fruits); will replace last three elements of $color array with element of fruit
    // array_splice($color,0,3,$fruits); will replace first three element of $color array with $fruit array

    // array_splice($color,1,count($color),$fruits) ==> will replace the elements of $color array from index 1 
    to next index 3 and remove the remaining i.e. violet and yellow
             */

    // inserting item in the $color array
    $colour = ['red', 'green', 'cyan','blue','violet','yellow'];
    $fruits = ["apple",'mango','orange'];
    array_splice($colour,0,0,$fruits);
    /* // will add the fruit array at the begining of colour array
 //   array_splice($colour,2,0,$fruits); => will add the $fruit array from index 2 to index 4 and shift the 
 remaining elements i.e. cyan, blue,violet,yellow to the right 
 //  array_splice($colour,count($colour),0,$fruits); => will add the $fruit array at the end of $colour array
    */
    echo "<pre>";
    print_r($colour);
    echo "</pre>"; 
  
?>