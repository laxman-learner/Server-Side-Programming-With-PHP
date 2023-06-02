.<?php
// printing multidimensional indexed array with list() function
$emp = [
    [1,"Krishana","Manager",50000],
    [2, "Salman","Salesman",20000],
    [3,"Mohan","Computer Operator",12000],
    [4, "Amir","Driver",5000]
];
foreach($emp as list($id,$name,$Designation,$Salary)){
    echo " $id $name  $Designation $Salary <br>";
}
echo"<h5>Data in tabular form </h5>";
echo "<table border = '2px' cellpadding ='10px' cellspacing ='0'>";
echo "<tr>";
    echo "<th>Name </th>";
    echo "<th>Physics </th>";
    echo "<th>Chemistry </th>";
    echo "<th>Math </th>";
    echo "</tr>";
foreach($emp as list($id,$name,$Designation,$Salary)){
    echo "<tr> <td>$id</td> <td>$name</td>  <td>$Designation</td> <td>$Salary</td> </tr>";
}
echo "</table>";
?>