
<?php
// these are the superglobals which are arrays
/** 
 * 
 * $GLOBALS  contain all the global variable in your script
 * 
 * 
 * $_GET['url'] so on. 
 *
 * $_POST
 * 
 * $_FILES
 * 
 * $_COOKIE
 * 
 * $_REQUEST
 * 
 * $_SESSION
 * 
 * $_SERVER
*/

echo "<p>The name of the current script is ",
$serverTime = $_SERVER["REQUEST_TIME"], "<br /></p>";
$time = date('Y,m,d', $serverTime);
echo $time. "<br />";

echo "This script was executed with the following server
software: ", $_SERVER["SERVER_SOFTWARE"], "<br />";
echo "This script was requested with the following server
protocol: ", $_SERVER["SERVER_PROTOCOL"], "</p>";


// You can also use the global variable $GLOBALS

$GlobalVariable = "butt flies";
function scopeExample(){
    echo "<br /><p>". $GLOBALS["GlobalVariable"]."</p>";
}
// when you use $GLOBALS you ommit the $ in the variable.
scopeExample();
?>