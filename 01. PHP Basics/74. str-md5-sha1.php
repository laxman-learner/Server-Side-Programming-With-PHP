<?php

// Md5 and Sha1 => mostly used for password protection which can not be decoded

$str = "Hello hi";
echo "The original string is : ". $str."<br><br>";

echo "md5 HEX : ".md5($str,FALSE)."<br><br>"; 
// second parameter is by default false and return 32 character hex number whatever the length of the string

echo "md5 Binary : ".md5($str,TRUE)."<br><br>";  // this returns raw 16 character hex number irrespective the length of string


echo "sha1 HEX : ".sha1($str,FALSE)."<br><br>"; 
// second parameter is by default false and return 40 character hex number irrespective of the length of string

echo "sha Binary : ".sha1($str,TRUE)."<br><br>";  // this returns raw 20 character hex number irrespective of the length of string

// password matching

if(md5($str) == "8b1a9953c4611296a827abf8c47804d7") // this is the md5 of 'Hello'
{
    echo "<br>Password Matched";
}
else {
    echo"<br>Sorry ! Reenter the password";
}
?>