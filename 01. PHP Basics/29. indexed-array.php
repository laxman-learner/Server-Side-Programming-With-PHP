<?php
// php array can contain multiple data item of dissimilar types under the same name
$colors = array("red",'yellow',20,23.5);
 //another way: $colors = ["red",'yellow',20,23.5];
echo $colors[0]."<br>";
echo $colors[1]."<br>";
echo $colors[2]."<br>";
echo $colors[3]."<br>";
// array elements can also be accessed using predefined function for array i.e. print_r()
print_r($colors);
//output of this function is: Array ( [0] => red [1] => yellow [2] => 20 [3] => 23.5 )
//we can use print_r function in attractive way as follow using pre tag
echo "<pre>";
print_r($colors);
echo "<pre>";
echo "</pre>";
/* output will be :
Array
(
    [0] => red
    [1] => yellow
    [2] => 20
    [3] => 23.5
)
*/
// array can also be defined and initialized using index as:
$colors[0]="red";
$colors[1]="green";
$colors[2]="white";
$colors[3]="Magenta";
// displaying array elements:
echo $colors[0]."<br>";
echo $colors[1]."<br>";
echo $colors[2]."<br>";
echo $colors[3]."<br>";
// with the help of loop
echo "<ul>";
for($i = 0; $i<4; $i++ ){
    echo "<br><li>".$colors[$i]."</li>";
}
echo "</ul>";
?>