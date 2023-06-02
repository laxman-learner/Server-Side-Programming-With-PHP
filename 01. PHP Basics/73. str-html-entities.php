<?php

// html entities and htmlspecialchars in php => see in 'view page source' to see the effect of these functions

$str = "A 'quote' is <b>bold</b>";
echo $str."<br><br>";

echo htmlentities($str)."<br><br>";

$string = '<a href = "https://www.google.com">Google Search </a>';
echo $string."<br><br>";

echo htmlentities($string);

echo"<br><br>";
echo htmlentities($string,ENT_QUOTES);

echo"<br><br>";
echo htmlentities($string,ENT_NOQUOTES);


echo"<br><br>";
echo htmlspecialchars($string);


echo"<br><br>";
echo htmlspecialchars($string,ENT_QUOTES);


echo"<br><br>";
echo htmlspecialchars($string,ENT_NOQUOTES);

// decode functions

$htmlent = htmlentities($string,ENT_QUOTES);
echo "<br><br>".$htmlent;


echo "<br><br>".html_entity_decode($htmlent);

$htmlent = htmlspecialchars($string,ENT_QUOTES);
echo "<br><br>".$htmlent;

echo "<br><br>".htmlspecialchars_decode($htmlent);


// to see the special characters that can be encoded by the htmlentities and htmlspecialchars

$array = get_html_translation_table();
echo "<pre>";
print_r($array);
echo"</pre>";

echo "<br><br>";
$array = get_html_translation_table(HTML_SPECIALCHARS); // by default
echo "<pre>";
print_r($array);
echo"</pre>";

echo "<br><br>";
$array = get_html_translation_table(HTML_ENTITIES);
echo "<pre>";
print_r($array);
echo"</pre>";

?>