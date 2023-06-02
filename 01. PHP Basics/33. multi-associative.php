<?php
$marks = array(
    "Krishna" => array("physics"=>85,"chemistry"=>89, "math"=>90),
    "Salman" => array("physics"=>78,"chemistry"=>87, "math"=>89),
    "Mohan" => array("physics"=>67,"chemistry"=>90, "math"=>78)
);
//latest way introduced in php version 5.4
/* $marks = [
    "Krishna" => [
        "physics"=>85,
        "chemistry"=>89, 
        "math"=>90],
    "Salman"  => [
        "physics"=>78,
        "chemistry"=>87, 
        "math"=>89],
    "Mohan"   => [
        "physics"=>67,
        "chemistry"=>90, 
        "math"=>78]
]; */
echo "<pre>";
print_r($marks);
echo "</pre>";
foreach($marks as $keys=>$v1){
    echo $keys;
    foreach($v1 as $v2){
        echo "  ".$v2." ";
    }
    echo "<br>";
}
    
    // displaying data in tabular form
    echo "<table border = '2px' cellpadding ='10px' cellspacing ='0'>";
    echo "<tr>";
    echo "<th>Name </th>";
    echo "<th>Physics </th>";
    echo "<th>Chemistry </th>";
    echo "<th>Math </th>";
    echo "</tr>";
    foreach($marks as $key=>$v1){
        echo "<tr><td>$key</td>";
        foreach($v1 as $v2){
            echo "<td>$v2</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>