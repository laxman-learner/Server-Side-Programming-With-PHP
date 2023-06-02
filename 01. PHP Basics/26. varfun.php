<?php
function wow($name){
    echo "Hello $name";
}
$func = "wow";
$func("Laxman");

//alternative away : this is called ananymous function
$sayHello = function($name){
    echo "<br> Hello $name";
};
$sayHello("Laxman");
?>