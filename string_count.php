<?php
$BookTitle = "The Cask of Amontillado";
echo "<p> The book title contains ". 
strlen($BookTitle)." characters!";

$ExampleString = "woodworking project";
echo substr($ExampleString,4) . "<br />\n";
echo substr($ExampleString,4,7) . "<br />\n";
echo substr($ExampleString,0,8) . "<br />\n";
echo substr($ExampleString,-7) . "<br />\n";
echo substr($ExampleString,-12,4) . "<br />\n";
?>