<?php
 // string search functions:

 // case-sensitive functions

 $str = 'Hello World. The world is beautiful too';

 echo strstr($str,'world');
 echo "<br>".strstr($str,'World');
 echo "<br>".strstr($str,'world',false);

 echo "<br>".strstr($str,'world',true);

 echo "<br>".strchr($str,'world',false); // exactly same as strstr()

 echo "<br>".strrchr($str,'world'); // exactly same as strstr() but searches from right

 // case-insensitive functions

 echo "<br>".stristr($str,'world'); // exactly same as strstr() but case insensitive
 echo "<br>".stristr($str,'WORLD');

 echo "<br>".strpbrk($str,'e');
 echo "<br>".strpbrk($str,'is');
 echo "<br>".strpbrk($str,'or');

?>