<?php

// rand(min,max) => returns the different random value between min and max in every refresh

echo rand()."<br>";
echo rand(10,20);

echo "<br>".rand(100,150);

//mt_random(min,max) //  based on Mersenne Twister algorthm 4 times faster than rand()

echo "<br>".mt_rand(100,150);

echo "<br>".mt_rand(10,50);

// lcg_value() => returns random float value between 0 and 1
echo "<br>".lcg_value();


?>