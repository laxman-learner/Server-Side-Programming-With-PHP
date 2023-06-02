<?php

// $_GET , $_POST and $_REQUEST super global variables => used for displaying data of one file to another file

// dislaying the submitted data

/* 
if method = 'get' is used in form
echo "<pre>";
print_r($_GET);
echo "</pre>";

// for displaying the individual particular data


echo "<br>".$_GET['fname'];
echo "<br>".$_GET['age'];

 */

// if method = 'post' is used in form => used for sensitive data

echo "<pre>";
print_r($_POST);
echo "</pre>";

// for displaying the individual particular data


echo "<br>".$_POST['fname'];
echo "<br>".$_POST['age'];

// $_REQUEST variable => work for both get and post methods

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

// for displaying the individual particular data


echo "<br>".$_REQUEST['fname'];
echo "<br>".$_REQUEST['age'];

// $_SERVER variable

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

// for displaying the individual particular information


echo "<br>".$_SERVER['PHP_SELF'];
echo "<br>".$_SERVER['HTTP_HOST'];

?>