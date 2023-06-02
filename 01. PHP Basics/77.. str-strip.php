<?php

// strip_tags() and wordwrap() => can be realized in view source

$str = "Hello <b> world </b>, Hello <i> Earth </i>";
echo $str;
echo "<br>".strip_tags($str); // removes the all tags : i.e. bold and italic tags

echo "<br>".strip_tags($str,"<b>"); // removes only italic tags

$str = "This world is beautiful too";
echo "<br>".wordwrap($str,4,"<br>");  // breaks the string after 4 character whenever white space is reached

echo "<br>".wordwrap($str,4,"<br>",TRUE);

/*   breaks the string after every 4 character including white space
 fourth character is by default FALSE means no wrap.
 */

?>