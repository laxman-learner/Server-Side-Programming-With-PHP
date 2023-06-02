<?php
 // array soring functions:

 // sorting functions for indexed arrays:

 $a = ['orange','banana','grapes','mangoes'];
 sort($a); // this sort the elements in ascending order .. doesn't return array but sort the orginal array
 echo '<pre>';
 print_r($a);
 echo '</pre>';

 rsort($a); // this sort the elements in descending order .. doesn't return array but sort the orginal array
 echo '<pre>';
 print_r($a);
 echo '</pre>';

 // sort() and rsort() can also be used for integer or float array for sorting in ascending or descending order

 $b = [10,2, 56, 65 , 80,9];
 sort($b); 
  echo '<pre>';
 print_r($b);
 echo '</pre>';


 // array sorting function for associative arrays
 $arr = ['d'=> 'mango',
     'a'=> 'grapes',
     'c'=> 'apple',
     'b'=> 'banana'
 ];
 asort($arr); // this sort the value only but not key in ascending order .. doesn't return array but sort the orginrrl rrrray
 echo '<pre>';
 print_r($arr);
 echo '</pre>';

 arsort($arr); // this sort the value only but not key in descending order .. doesn't return array but sort the orginal array
 echo '<pre>';
 print_r($arr);
 echo '</pre>';
 // asort() and arsort() can also be used for integer or float array for sorting value in ascending or descending order

 // key sorting function

 ksort($arr); // this sort the key but not value in ascending order .. doesn't return array but sort the orginrrl rrrray
 echo '<pre>';
 print_r($arr);
 echo '</pre>';

 krsort($arr); // this sort the key but not value in descending order .. doesn't return array but sort the orginal array
 echo '<pre>';
 print_r($arr);
 echo '</pre>';
 // ksort() and krsort() can also be used for integer or float array for sorting key in ascending or descending order

 // natural order sorting
$array = ['img1.png','img10.png','img12.png','img2.png'];

//standard sorting

echo 'standard sorting using sort() <br>';  // this treats 10 smaller than 2 as first digit is smaller than 2 for combo of char and int

sort($array);
echo '<pre>';
print_r($array);
echo '</pre>';

 // sorting using natsort()

echo 'sorting using natsort()'; //  this sort the elements according to natural order algorithm and treats 2 smaller than 10 

   natsort($array);
   echo '<pre>';
   print_r($array);
   echo '</pre>';

   $temp_files = array("temp15.txt","Temp10.txt",
   "temp1.txt","Temp22.txt","temp2.txt");
   
   
   sort($temp_files);
   echo "standard order: "; // case sensitive uppercase first then lowercase
   echo "<pre>";
   print_r($temp_files);
   echo "</pre>";
   echo "<br />";


   natsort($temp_files);  // case sensitive uppercase first then lowercase
   echo "Natural order: ";
   echo "<pre>";
   print_r($temp_files);
   echo "</pre>";
   echo "<br />";
   

   natcasesort($temp_files);
   echo "Natural order case insensitve: ";
   echo "<pre>";
   print_r($temp_files);
   echo "</pre>" ;

   // sorting multiple arrays at a time 

   // input arrays

   $food = ['organge','banana','apple'];

   $fruit = ['lemon','carrot','guava'];

   $sample = [ 4,2,98];


array_multisort($food,SORT_DESC, $fruit,SORT_DESC,$sample,SORT_DESC);
 // this function sort the one or more than one array containing same number of elements at once

 // printing sorted arrays

   echo "<pre>";
   print_r($food);
   echo "</pre>" ;

   echo "<pre>";
   print_r($fruit);
   echo "</pre>" ;

   echo "<pre>";
   print_r($sample);
   echo "</pre>" ;

   // array_reverse() function -> this returns the array in reverse order 

   $food = ['organge','banana','apple','grapes','mango','guava'];  // input array

   $newArray = array_reverse($food); // reversing the array 

   // printing resulting array

   echo "<pre>";
   print_r($newArray);
   echo "</pre>" ;

?>