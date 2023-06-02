<?php
// multidimensional indexed array
$emp = array(
    array(1,"Krishana","Manager",50000),
    array(2, "Salman","Salesman",20000),
    array(3,"Mohan","Computer Operator",12000),
    array(4, "Amir","Driver",5000)
);
echo $emp[2][1];
$emp = [
    [1,"Krishana","Manager",50000],
    [2, "Salman","Salesman",20000],
    [3,"Mohan","Computer Operator",12000],
    [4, "Amir","Driver",5000]
];
echo "<br>" . $emp[0][1];
// similarly other value can be printed
echo "<pre>";
print_r($emp);
echo "<pre>";
for($i = 0; $i <4; $i++){
for($j = 0; $j <4; $j++){
    echo $emp[$i][$j]."  ";
}
echo "<br>";
}
echo "<h2>using foreach loop:</h2>";
// using foreach loop 
foreach($emp as $v1){
    foreach($v1 as $v2){
        echo $v2." ";
    }
    echo "<br>";
}
echo "<table border ='2px' cellpadding ='10px' cellspacing='0'>";
echo "<tr>";
echo "<th>S.N.";
echo "<th>Name";
echo "<th>Designation";
echo "<th>Salary";
echo "</tr>";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>