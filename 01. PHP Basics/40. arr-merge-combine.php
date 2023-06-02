<?php
/* 
array_combine() -> for combining indexed array
array_merge()  -> for merging indexed or associative array
array_merge_recursive() -> for merging multidimensional associative arrays */
// merging two indexed arrays
$fruits = ['banana','apple'];
$vege   = ['carrot', 'pea'];
$temp   = array_combine($fruits, $vege);

 /*   this function combines the two indexed array having the equal number
of elements. During merging this function treats the elements of the first array as the key and respected 
elements as the value and returns the resultant array in the form of associative array */
echo "<pre>";
print_r($temp);
echo "</pre>";
array_push($fruits,'mango');
$temp   = array_merge($fruits, $vege);
$colors = ['red','green','blue'];
$temp = array_merge($fruits,$vege,$colors);
echo "<pre>";
print_r($temp);
echo "</pre>";
//merging indexed and associative array
$fruit = ['a'=>'banana','b'=>'apple','c'=>'orange'];
$veget   = ['carrot', 'pea'];
$temp = array_merge($fruit,$veget);
echo "<pre>";
print_r($temp);
echo "</pre>";
// merging two associative arrays
$fru = ['a'=>'banana','b'=>'apple','c'=>'orange'];
$veg   = ['d'=>'carrot', 'e'=>'pea'];
$temp = array_merge($fru,$veg);
echo "<pre>";
print_r($temp);
echo "</pre>";
// merging two associative arrays with duplicate keys
$arr1 = ['a'=>'banana','b'=>'apple','c'=>'orange',55];
$arr2   = ['b'=>'carrot', 'e'=>'pea',29.4,'rasberry'];
$temp = array_merge($arr1,$arr2); /* value of duplicate key is replaced by the value of 
duplicate key in second array. here apple is replaced with carrot.
 */
echo "<pre>";
print_r($temp);
echo "</pre>";
// Combining arrays with '+' operator
$newArray = $arr1 + $arr2; // in this case duplicate value is not replaced by other and remains as it is
echo "<pre>";
print_r($newArray);
echo "</pre>";
// array_merge_recursive() will make the internal associative for the elemets which have same keys
$newArray = array_merge_recursive($arr1,$arr2);
echo "<pre>";
print_r($newArray);
echo "</pre>";
// merging multidimensional associative arrays
$array1 = ['a'=>'banana','b'=>'apple','c'=>'orange',55];
$array2   = [
    'b'=>['color'=>['red','green','blue']], 
     'e'=>'pea',
     29.4,
     'rasberry'
              ];
$newArray = array_merge_recursive($array1,$array2);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>