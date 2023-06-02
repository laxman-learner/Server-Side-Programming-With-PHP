<?php
// printing multidimensional associative array with list() function
$emp = [
    [
        "id" => 1,
        "Name" => "Krishna",
        "position" => "Manager",
        "salary" => 50000
    ],
    [
        "id" => 2,
        "Name" => "Salman",
        "position" => "Salesman",
        "salary" => 20000
    ],
    [
        "id" => 3,
        "Name" => "Mohan",
        "position" => "Computer Operator",
        "salary" => 40000
    ],
    [
        "id" => 4,
        "Name" => "Amir",
        "position" => "Driver",
        "salary" => 30000
    ],
    [
        "id" => 5,
        "Name" => "Muskan",
        "position" => "Computer Assistant",
        "salary" => 30000
    ]
    ];
    foreach($emp as list("id"=>$id, "Name"=>$name, "position"=>$Designation, "salary"=>$Salary)){
        echo " $id $name  $Designation $Salary <br>";
    }
    echo"<h5>Data in tabular form </h5>";
    echo "<table border = '2px' cellpadding ='10px' cellspacing ='0'>";
    echo "<tr>";
        echo "<th>ID </th>";
        echo "<th>Name </th>";
        echo "<th>Designation </th>";
        echo "<th>Salary </th>";
        echo "</tr>";
        foreach($emp as list("id"=>$id, "Name"=>$name, "position"=>$Designation, "salary"=>$Salary)){
        echo "<tr> <td>$id</td> <td>$name</td>  <td>$Designation</td> <td>$Salary</td> </tr>";
    }
    echo "</table>";
?>